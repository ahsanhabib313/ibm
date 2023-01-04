<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentEnrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_enrolls', function (Blueprint $table) {
            $table->id();

            $table->foreignId("user_id")
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('airport_pickup')->nullable();
            $table->string('course')->nullable();
            $table->string('rpl_apply')->nullable();
            $table->string('employment_status')->nullable();

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
        Schema::dropIfExists('student_enrolls');
    }
}
