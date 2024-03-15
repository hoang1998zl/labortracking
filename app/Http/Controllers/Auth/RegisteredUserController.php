<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        // dd($request);
        $user = User::updateOrCreate([
            ...$data,
            'product_type' => 'FREE',
            'password' => $data['password'],
            'password_text' => $data['password'],
            'company_identity' => md5($data['email'] . time())
        ]);
        event(new Registered($user));

        Auth::login($user);
        // Auth::user()->notify(new UserRegisterNotification($user));
        return redirect(route('verification.notice'))->with([
            'message' => 'Đăng ký thành công. Xin vui lòng xác thực email để tiếp tục.',
            'type' => 'success'
        ]);
    }
}
