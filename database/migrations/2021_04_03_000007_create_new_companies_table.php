<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('new_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->longText('services');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
