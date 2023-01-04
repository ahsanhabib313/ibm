<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->timestamp('schedule_date')->nullable();
            $table->string('schedule_time')->nullable();
            $table->string('is_accept')->default(0)->comment('1 = accepted, 2 = rejected, 0 = normal');
            $table->string('is_global_request')->default(0)->comment('1 = accepted, 2 = rejected, 0 = normal');
            $table->tinyInteger('booking_status')->default(0)->comment(' 0 = not booked, 1 = booked');
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
        Schema::dropIfExists('bookings');
    }
}
