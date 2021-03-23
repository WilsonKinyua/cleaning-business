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
            $table->string('order_type')->nullable();
            $table->string('customer')->nullable();
            $table->integer('customer_phone')->nullable();
            $table->integer('status');
            $table->string('description')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
        });
    }
}
