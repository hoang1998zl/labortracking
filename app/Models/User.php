<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use App\Notifications\NewResetPasswordNotification;
use App\Notifications\NewVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements MustVerifyEmail, FilamentUser, HasName, HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    public function canAccessFilament(): bool
    {
        return str_ends_with($this->email, '')
            && $this->hasVerifiedEmail();
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new NewResetPasswordNotification($token));
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new NewVerifyEmail);
    }

    public function getFilamentName(): string
    {
        return "{$this->email}";
    }

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->email}";
    }
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'phone',
        'password',
        'company_name',
        'company_code',
        'provider',
        'provider_id',
        'is_setting',
        'password_text',
        'product_type',
        'authToken',
        'company_identity',
        'expired_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
