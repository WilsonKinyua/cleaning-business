<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('open_hours');
            $table->longText('description');
            $table->string('support_email_1');
            $table->string('support_email_2')->nullable();
            $table->integer('support_phone_1');
            $table->integer('support_phone_2')->nullable();
            $table->string('address_line')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
