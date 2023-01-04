<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'price',
        'commission',
        'commission_percentage',
        'desktop_icon',
        'mobile_icon',
        'image',
        'details',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
  
}
