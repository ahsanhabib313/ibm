<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id',
        'user_id',
        'service_id',
        'schedule_date',
        'schedule_time',
        'booking_status',
    ];

    protected $casts = [
        'schedule_time' => 'date:hh:mm'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
