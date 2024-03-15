<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermissions extends Model
{
    use HasFactory;
    protected $table = 'user_permissions';
    protected $fillable = [
        'email',
        'password',
        'boss_account_id',
        'status',
        'permission_cauhinh',
        'permission_hoso',
        'permission_bangluong',
        'permission_duyetapp',
        'permission_chamcong',
        'permission_tamung',
        'permission_macroluong',
        'permission_daotao',
        'permission_congno',
        'permission_thuongphat',
        'permission_baohiem',
        'permission_suckhoe',
        'permission_kyquy',
        'permission_congviec',
        'permission_babuoc'
    ];
}
