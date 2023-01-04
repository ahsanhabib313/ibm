<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_qualifications', function (Blueprint $table) {
            $table->id();

            $table->foreignid('student_enroll_id')
                ->constrained()
                ->ondelete('cascade')
                ->onupdate('cascade');

            $table->string('qualification')->nullable();
            $table->boolean('assessed')->default(false);
            $table->string('name')->nullable();

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
        Schema::dropIfExists('previous_qualifications');
    }
}
