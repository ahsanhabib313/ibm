<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->integer('total_unit')->nullable();
            $table->text('thumbnail')->nullable();
            $table->string('course_code')->nullable();
            $table->string('course_category_id')->nullable();
            $table->integer('core_unit')->nullable();
            $table->integer('elective_unit')->nullable();
            $table->integer('level')->nullable();
            $table->integer('lectures')->nullable();
            $table->integer('students')->nullable();
            $table->integer('duration')->nullable();
            $table->string('language')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
