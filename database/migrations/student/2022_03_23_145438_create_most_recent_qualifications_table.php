<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMostRecentQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('most_recent_qualifications', function (Blueprint $table) {
            $table->id();

            $table->foreignid('student_enroll_id')
                ->constrained()
                ->ondelete('cascade')
                ->onupdate('cascade');

            $table->string('completed_year')->nullable();
            $table->string('country')->nullable();
            $table->string('school_institution')->nullable();
            $table->string('qualification_name')->nullable();

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
        Schema::dropIfExists('most_recent_qualifications');
    }
}
