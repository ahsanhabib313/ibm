<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class USIDetails extends Model
{
    use HasFactory;

    protected $table = 'usi_details';

    protected $guarded = [""];
}
