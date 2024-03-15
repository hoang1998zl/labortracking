<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = "settings";

    protected $fillable = [
        'website_address',
        'website_phone',
        'website_email',
        'website_tax_code',
        'website_name',
        'meta_description',
        'meta_keyword',
    ];
}
