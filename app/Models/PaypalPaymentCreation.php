<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalPaymentCreation extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'service_id',
        'admin_id',
        'provider_id',
        'customer_id',
        'payment_id',
        'checkout_url',
        'execute_url',
        'payment_status'
    ];
}
