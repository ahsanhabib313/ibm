<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnCourseToCourseIdInStudentEnrolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_enrolls', function (Blueprint $table) {

            $table->renameColumn('course', 'course_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_enrolls', function (Blueprint $table) {

            $table->renameColumn('course_id', 'course');
            
        });
    }
}
