<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\Auth\PasswordResetRequest;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(PasswordResetRequest $request): RedirectResponse
    {
        $request->validated();

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
            ? back()->with([
                "message" => "Chúng tôi đã gửi một email reset mật khẩu đến địa chỉ email của Quý khách. Hãy kiểm tra email và làm theo hướng dẫn.",
                "type" => "success"
            ])
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => "Có lỗi xảy ra. Hãy nhập đúng email và thử lại."]);
    }
}
