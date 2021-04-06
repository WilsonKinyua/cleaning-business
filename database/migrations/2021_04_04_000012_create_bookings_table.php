<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company');
            $table->string('date')->nullable();
            $table->string('customer')->nullable();
            $table->string('customer_phone')->nullable();
            $table->text('service');
            $table->string('description')->nullable();
            $table->string('location')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_address');
            $table->timestamps();
        });
    }
}
