<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    public $fillable = [
        'name',
        'position',
        'email',
        'phone',
        'company',
        'scale',
        'message'
    ];

    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {
            $adminEmail = "tienvannguyen2589@gmail.com";
            Mail::to($adminEmail)->queue(new ContactMail($item));
        });
    }
}
