<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToServicesTable extends Migration
{
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->unsignedBigInteger('company_name_id');
            $table->foreign('company_name_id', 'company_name_fk_3509822')->references('id')->on('companies');
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id', 'service_fk_3509823')->references('id')->on('categories');
        });
    }
}
