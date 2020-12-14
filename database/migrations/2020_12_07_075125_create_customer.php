<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    public function up()
    {
        Schema::table('customer', function (Blueprint $table) {
            $table->increments('customerCode');
            $table->string('firstName', 50);
            $table->string('surname', 50);
            $table->string('address', 255);
            $table->string('postCode');
            $table->string('telephoneNumber', 11);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('customer', function (Blueprint $table) {
            Schema::dropIfExists('customer');
        });
    }
}
