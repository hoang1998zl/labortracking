<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME . '?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        Auth::login($request->user());

        User::where('id', Auth::id())->update([
            'authToken' => md5(Auth::user()->email.time()),
            'expired_token' => date('Y-m-d H:i:s', strtotime('+12 hours')),
        ]);

        return redirect(route('profile.setting'))->with([
            'message' => 'Xác thực email thành công. Vui lòng thực hiện các cài đặt cho tài khoản.',
            'type' => 'success'
        ]);
    }
}
