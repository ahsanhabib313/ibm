<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->nullable();
            $table->string('confirmation_code')->nullable();
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->integer('user_id')->nullable()->comment('Service Provider User ID');
            $table->tinyInteger('payment_type')->default('0')->comment('1 = Cash Payment, 2 = Online Payment');
            $table->float('amount', 20, 2)->default('0');
            $table->float('due', 20, 2)->default('0');
            $table->float('deduction', 20, 2)->default('0');
            $table->float('total_amount', 20, 2)->nullable();
            $table->string('transaction_id')->nullable();
            $table->tinyInteger('order_status')->default('0')->comment(' 0 = pending, 1 = progressing, 2 = completed');
            $table->tinyInteger('payment_status')->default('0')->comment('1 = Paid, 0 = Unpaid');
            $table->tinyInteger('is_company_payment')->default('0')->comment('1 = Paid, 0 = Unpaid');
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
        Schema::dropIfExists('orders');
    }
}
