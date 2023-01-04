<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'package_type',
        'group',
        'number_of_person',
        'price',
        'start_date',
        'end_date',
        'description',
    ];

    public function service()
    {
        return $this->belongsToMany(Service::class);
    }
}
