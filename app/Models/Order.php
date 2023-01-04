<?php

namespace App\Models;

use App\Traits\UserAction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_code',
        'booking_id',
        'user_id',
        'amount',
        'due',
        'deduction',
        'total_amount',
        'transaction_id',
        'status',
        'payment_status',
        'order_status',
        'is_company_payment',
        'payment_type',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function paypalPaymentCreation()
    {
        return $this->hasOne(PaypalPaymentCreation::class);
    }
}
