<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_enroll_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('given_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('title')->nullable();
            $table->string('visa_expiry_date')->nullable();
            $table->string('visa_number')->nullable();
            $table->string('visa_subclass')->nullable();
            $table->string('visa_type')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('nationality')->nullable();
            $table->string('date_of_birth')->nullable();

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
        Schema::dropIfExists('personal_details');
    }
}
