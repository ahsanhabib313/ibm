<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalPaymentCreationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypal_payment_creations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->bigInteger('admin_id')->nullable();
            $table->bigInteger('provider_id')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('checkout_url')->nullable();
            $table->string('execute_url')->nullable();
            $table->string('payment_status')->default('1')->comment('1 = active, 2 = done');
            $table->timestamps();
            // $table->foreign('order_id') ->references('id')->on('orders') ->onDelete('cascade');
            // $table->foreign('service_id') ->references('id')->on('services') ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypal_payment_creations');
    }
}
