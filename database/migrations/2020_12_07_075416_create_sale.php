<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSale extends Migration
{
    public function up()
    {
        Schema::table('sale', function (Blueprint $table) {
            $table->increments('saleCode');
            $table->string('saleDate');
            $table->string('amount');
            $table->string('customerCode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('sale', function (Blueprint $table) {
            Schema::dropIfExists('sale');
        });
    }
}
