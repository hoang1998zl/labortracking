<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsHistory extends Model
{
    use HasFactory;

    protected $table = 'payments_history';

    protected $fillable = [
        'id',
        'user_id',
        'payment_code',
        'payment_bank',
        'payment_date',
        'amount',
        'time_rechange',
        'description',
        'product_type',
        'status',
        'created_at',
        'updated_at'
    ];
}
