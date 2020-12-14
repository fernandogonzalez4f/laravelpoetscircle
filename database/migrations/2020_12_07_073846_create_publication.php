<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublication extends Migration
{

    public function up()
    {
        Schema::table('publication', function (Blueprint $table) {
            $table->increments('publicationCode');
            $table->string('title', 100);
            $table->string('price');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::table('publication', function (Blueprint $table) {
            Schema::dropIfExists('publication');
        });
    }
}
