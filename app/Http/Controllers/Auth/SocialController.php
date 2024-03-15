<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\SocialUser;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    use SocialUser;

    /**
     * Redirect to callback
     *
     * @param  mixed $provider
     * @return RedirectResponse
     */
    public function redirect($provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * handle social login
     *
     * @param  mixed $provider
     * @return void
     */
    public function callback($provider)
    {
        try {
            $getInfo = Socialite::driver($provider)->user();
            return $this->createOrFindUser($getInfo, $provider);
        } catch (\Throwable $th) {
            return redirect()->back()->with([
                "message" => "Có lỗi xảy ra, xin vui lòng thử lại.",
                "type" => "error"
            ]);
        }
    }
}
