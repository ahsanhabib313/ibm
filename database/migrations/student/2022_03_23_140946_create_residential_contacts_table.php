<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentialContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residential_contacts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_enroll_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('residential_email')->nullable();
            $table->string('residential_mobile')->nullable();
            $table->string('residential_post_code')->nullable();
            $table->string('residential_state')->nullable();
            $table->string('residential_street_suburb')->nullable();
            $table->string('residential_street_name')->nullable();
            $table->string('residential_street_no')->nullable();
            $table->string('residential_flat_unit')->nullable();
            $table->string('residential_building_name')->nullable();

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
        Schema::dropIfExists('residential_contacts');
    }
}
