<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_posts', function (Blueprint $table) {
            $table->id();

            $table->foreignid('student_enroll_id')
                ->constrained()
                ->ondelete('cascade')
                ->onupdate('cascade');

            $table->string('po_box')->nullable();
            $table->string('code')->nullable();
            $table->string('state')->nullable();
            $table->string('suburb')->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_no')->nullable();
            $table->string('flat_unit')->nullable();
            $table->string('building_name')->nullable();
            $table->string('method')->nullable();

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
        Schema::dropIfExists('contact_posts');
    }
}
