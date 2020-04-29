<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reservation_id')->unsigned();
            $table->foreign('reservation_id')->references('id')->on('reservations');
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('card_number', 16);
            $table->string('cvc', 16);
            $table->string('street', 128);
            $table->string('city', 128);
            $table->string('country', 128);
            $table->integer('postal_code');
            $table->string('phone', 64);
            $table->string('passport_number', 9);
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
        Schema::dropIfExists('payment_details');
    }
}
