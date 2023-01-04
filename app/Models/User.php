<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'user_type',
        'is_online',
        'email',
        'phone',
        'student_id',
        'course_code',
        'photo',
        'date_of_birth',
        'about',
        'latitude',
        'longitude',
        'address',
        'email_verified_at',
        'password',
        'course_id',
        'course_enroll_type',
        'certified_by',
        'country_state',
        'agent_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function order()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }

    public function customerMessage()
    {
        return $this->hasOne(Message::class, 'customer_id', 'id');
    }

    public function providerMessage()
    {
        return $this->hasOne(Message::class, 'provider_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
