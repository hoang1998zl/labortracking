<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    // public function create(): View
    // {
    //     return view('auth.login');
    // }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // dd(User::get());
        $request->authenticate();

        $token = md5(Auth::user()->email.time());

        $request->session()->regenerate();

        User::where('id', Auth::id())->update([
            'authToken' => $token,
            'expired_token' => date('Y-m-d H:i:s', strtotime('+12 hours')),
        ]);
        return redirect(route('profile.edit'))->with([
            "message" => 'Chào mừng Quý Khách quay trở lại.',
            "type" => "success"
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
