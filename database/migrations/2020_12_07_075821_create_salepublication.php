<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalepublication extends Migration
{
    public function up()
    {
        Schema::table('salePublication', function (Blueprint $table) {
            $table->increments('saleCode');
            $table->string('publicationCode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('salePublication', function (Blueprint $table) {
            Schema::dropIfExists('salePublication');
        });
    }
}
