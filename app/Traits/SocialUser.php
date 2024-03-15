<?php

namespace App\Traits;

use App\Models\User;
use App\Notifications\UserRegisterNotification;
use Illuminate\Support\Facades\Auth;

trait SocialUser
{
    public function createOrFindUser($get_info, $provider)
    {
        $user = User::where('provider_id', $get_info->id)->first();
        if (!$user) {
            // // Khoa dang ky
            // return redirect(route('gn24.index'));

            $user = User::create([
                'email'    => $get_info->email,
                'phone'    => null,
                'password'    => null,
                'company_name'    => null,
                'company_code'    => null,
                'provider' => $provider,
                'provider_id' => $get_info->id,
                'password_text' => null,
                'company_identity' => md5($get_info->email.time()),
            ]);
            if ($user->email_verified_at == null) {
                $user->sendEmailVerificationNotification();
            }
            auth()->login($user);
            // auth()->user()->notify(new UserRegisterNotification($user));

            return redirect(route('verification.notice'))->with([
                "message" => "Đăng nhập thành công. Quý khách hãy tiến hành xác thực email để bảo vệ tài khoản.",
                "type" => "success"
            ]);
        }

        auth()->login($user);
        $token = md5(Auth::user()->email . time());
        $user->update([
            'authToken' => $token,
            'expired_token' => date('Y-m-d H:i:s', strtotime('+12 hours')),
        ]);
        if ($user->is_setting == 1) {
            return redirect(route('profile.edit'))->with([
                "message" => "Đăng nhập thành công. Chào mừng Quý khách quay trở lại.",
                "type" => "success"
            ]);
        }
        return redirect(route('verification.notice'))->with([
            "message" => "Đăng nhập thành công. Quý khách hãy thiết lập tài khoản của mình để sử dụng ứng dụng.",
            "type" => "success"
        ]);
    }
}
