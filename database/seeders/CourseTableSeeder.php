<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            ['title' => 'BSB50120- Diploma of Business ', 'course_code' => 'BSB50120', 'content' => 'CPC30111 - Certificate III in Bricklaying- Block laying', 'core_unit' => 7, 'elective_unit' => 9, 'total_unit' => 16],
            ['title' => 'BSB60120- Advanced Diploma of Business ', 'course_code' => 'BSB60120', 'content' => 'CPC30611 - Certificate III in Painting and Decorating', 'core_unit' => 7, 'elective_unit' => 9, 'total_unit' => 16],
            ['title' => 'BSB80120- Graduate Diploma of Management (Learning) ', 'course_code' => 'BSB80120', 'content' => 'CPC31311 - Certificate III in Wall and Floor Tiling', 'core_unit' => 7, 'elective_unit' => 9, 'total_unit' => 16],
            ['title' => 'CPC30220- Certificate III in Carpentry ', 'course_code' => 'CPC30220', 'content' => 'CPC32011 - Certificate III in Carpentry and Joinery', 'core_unit' => 7, 'elective_unit' => 9, 'total_unit' => 16],
            
            
            
            
            
                
        ];

        Course::insert($courses);
    }
}
