<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('user_type')->nullable()->comment('1 = admin, 2 = partner agent, 3 = student');
            $table->tinyInteger('is_online')->default(0);
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('photo')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->text('about')->nullable();
            $table->string('latitude')->nullable(); 
            $table->string('longitude')->nullable();
            $table->text('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->tinyInteger('course_enroll_type')->nullable()->comment('1 = online, 2 = offline, 3 = none of them');
            $table->tinyInteger('certified_by')->nullable()->comment('1 = RPL, 2 = course');
            $table->string('country_state')->nullable();
            $table->tinyInteger('agent_type')->nullable()->comment('1 = Individual, 2 = Organization');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
