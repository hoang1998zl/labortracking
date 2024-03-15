<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Department;
use App\Models\Distributor;
use Illuminate\Http\Request;
use App\Traits\CheckItemArray;
use App\Charts\FolderCountChart;
use App\Charts\CallFrequencyChart;
use App\Charts\FileStorageCapacity;
use App\Charts\ProcedureCountChart;
use App\Charts\UploadFrequencyChart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use App\Charts\FileUploadedCountChart;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SettingFormRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\PaymentsHistory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProfileController extends Controller
{

    use CheckItemArray;

    /**
     * Display the user's profile form.
     */
    public function edit(
        Request $request,
        UploadFrequencyChart $UploadFrequencyChart,
        FolderCountChart $FolderCountChart,
        ProcedureCountChart $ProcedureCountChart,
        FileUploadedCountChart $FileUploadedCountChart,
        CallFrequencyChart $CallFrequencyChart,
        FileStorageCapacity $FileStorageCapacity,
    ): View {
        $tongduyet = Http::withHeaders(['token' => auth()->user()->authToken])->get('https://apihr.weos.vn/api/dvcc/lay-tong-duyet')->json();

        return view('profile.edit', [
            "tongduyet" => $tongduyet,
            'user' => $request->user(),
            'UploadFrequencyChart' => $UploadFrequencyChart->build(),
            'FolderCountChart' => $FolderCountChart->build(),
            'ProcedureCountChart' => $ProcedureCountChart->build(),
            'FileUploadedCountChart' => $FileUploadedCountChart->build(),
            'CallFrequencyChart' => $CallFrequencyChart->build(),
            'FileStorageCapacity' => $FileStorageCapacity->build(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user = $request->user();
        $user->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function tempUpload(Request $req)
    {
        if ($req->hasFile('avatar')) {
            $mediaItem = Media::where('model_id', $req->user()->id)->first();
            if ($mediaItem != null) {
                $mediaItem->delete();
            }
            $req->user()->addMedia($req->file('avatar'))->usingName("Avatar " . $req->user()->email)->toMediaCollection('user_avatar');
            return session()->flash('message', 'thanh cong');
        }
        return '';
    }

    public function plansAndPrices()
    {
        $choosedPlan = Auth::user()->product_type;

        $paymentHistory = PaymentsHistory::where('user_id', Auth::user()->id)->get();
        if ($paymentHistory->isEmpty()) {
            $paymentHistory = null;
        }

        return view('gn24-v2.plans-and-prices', [
            'choosedPlan' => $choosedPlan,
            'paymentHistory' => $paymentHistory
        ]);
    }

    public function changePlan(Request $request)
    {
        $user = $request->user();
        $user->product_type = $request->input('product_type');
        $user->save();

        return redirect()->back()->with('success', 'Thay đổi thành công');
        // return redirect()->back()->with(['message' => 'Thay đổi thư viện thanh cên thành công', 'type' => 'success']);
    }

    /**
     * Display setting account view
     *
     * @return View
     */
    public function index(): View
    {
        return view('profile.account.index', [
            'user' => Auth::user(),
        ]);
    }
    public function settingUpdate()
    {
        if (Auth::user()->is_setting != 1) {
            return redirect()->back();
        }
        return view('profile.account.update', [
            'user' => Auth::user(),
            'departments' => Department::where('user_id', Auth::user()->id)->get(),
            'file' => File::where('user_id', Auth::user()->id)->firstOrFail(),
            'can_distribute' => Distributor::where('user_id', Auth::user()->id)->get(),
        ]);
    }


    /**
     * handle setting account
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function addSetting(SettingFormRequest $request, $id): RedirectResponse
    {
        // dd($request);
        try {
            $passwordText = $request->password;
            $request->validated();
            $user = User::findOrFail($id);
            // check all field is fill
            if (in_array(null, $request->departments, true)) {
                return redirect()->back()->with([
                    "message" => "Hãy nhập tất cả các trường.",
                    "type" => "error"
                ]);
            }

            if ($user->provider == null) {
                $user->update([
                    "email" => $request->email,
                    "phone" => $request->phone,
                    "company_name" => $request->company_name,
                    "company_code" => $request->company_code,
                    "is_setting" => 1,
                    "password_text" => $passwordText,
                    'authToken' => md5($request->email . time()),
                    'expired_token' => date('Y-m-d H:i:s', strtotime('+12 hours')),
                ]);
            } else {
                $user->update([
                    "email" => $request->email,
                    "password" => $request->password,
                    "phone" => $request->phone,
                    "company_name" => $request->company_name,
                    "company_code" => $request->company_code,
                    "is_setting" => 1,
                    "password_text" => $passwordText,
                    'authToken' => md5($request->email . time()),
                    'expired_token' => date('Y-m-d H:i:s', strtotime('+12 hours')),
                ]);
            }
            //send user info
            // $user_info['co_quyen_chung_nhan_file'] = $request->distributors;
            $user_info = $user->toArray();

            // if setting user is 1, then update records only, setiing is 0, then create records
            if ($user->is_setting == 1) {
                // delete available data then create department
                Department::where('user_id', $id)->delete();
            }

            //create department
            foreach ($request->departments as $department) {
                // dd($department);
                Department::create([
                    'user_id' => $id,
                    'department_name' => $department,
                ]);
            }

            $user_info['phong_ban_va_chung_nhan'] = $request->departments;

            $response = Http::post('https://quanlyfile.weos.vn/api/file-manage/v1/weOS/get-info', $user_info);
            if ($response->created()) {
                return redirect(route('profile.edit'))->with([
                    "message" => "Cài đặt tài khoản thành công. Quý khách có thể tiếp tục sử dụng dịch vụ của chúng tôi. Xin cảm ơn.",
                    "type" => "success"
                ]);
            }
            return redirect()->back()->with([
                "message" => "Có lỗi xảy ra khi tiến hành cài đặt tài khoản, vui lòng thử lại.",
                "type" => "error"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
