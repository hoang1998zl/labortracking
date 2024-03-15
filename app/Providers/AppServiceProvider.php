<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Make $app_setting to be Global
        // View::share('app_setting', Setting::firstOrFail());

        //custom verify url
        VerifyEmail::createUrlUsing(function ($notifiable) {
            $verifyUrl = URL::temporarySignedRoute(
                'verification.verify',
                Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
                [
                    'id' => $notifiable->getKey(),
                    'hash' => sha1($notifiable->getEmailForVerification()),
                ]
            );
            // dd($verifyUrl);
            $newUrl = str_replace('localhost/weos', 'weos.vn', $verifyUrl);
            return $newUrl;
        });
        //end

        //Verification Email Customization
        VerifyEmail::toMailUsing(function (object $notifiable, string $newUrl) {
            return (new MailMessage)
                ->view('vendor.notifications.verify-email')
                ->subject('Xác minh địa chỉ Email')
                ->action('Xác minh', $newUrl);
        });
        //end
    }
}
