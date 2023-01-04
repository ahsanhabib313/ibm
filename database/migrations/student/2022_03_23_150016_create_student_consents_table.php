<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentConsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_consents', function (Blueprint $table) {
            $table->id();

            $table->foreignid('student_enroll_id')
                ->constrained()
                ->ondelete('cascade')
                ->onupdate('cascade');

            $table->string('date')->nullable();
            $table->string('name')->nullable();
            $table->string('consent_1')->nullable();
            $table->string('consent_2')->nullable();
            $table->string('consent_3')->nullable();
            $table->string('consent_4')->nullable();
            $table->string('consent_5')->nullable();

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
        Schema::dropIfExists('student_consents');
    }
}
