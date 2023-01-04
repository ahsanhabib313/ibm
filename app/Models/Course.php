<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'total_unit',
        'thumbnail',
        'qualification_code',
        'cricos_code',
        'duration',
        'course_category_id',
        'core_unit',
        'elective_unit',
        'level',
        'lectures',
        'students',
        'duration',
        'language',
        'content',
    ];

    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class);
    }
}
