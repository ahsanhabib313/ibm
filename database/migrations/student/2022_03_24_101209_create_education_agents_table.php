<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_agents', function (Blueprint $table) {
            $table->id();

            $table->string('agency_name')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_email')->nullable();
            $table->string('declaration_1')->nullable();
            $table->string('declaration_2')->nullable();
            $table->string('declaration_3')->nullable();
            $table->string('declaration_4')->nullable();
            $table->string('declaration_5')->nullable();
            $table->string('declaration_6')->nullable();
            $table->string('declaration_7')->nullable();

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
        Schema::dropIfExists('education_agents');
    }
}
