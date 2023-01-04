<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationAgent extends Model
{
    use HasFactory;

    protected $guarded = [""];

    protected $table = 'education_agents';
}
