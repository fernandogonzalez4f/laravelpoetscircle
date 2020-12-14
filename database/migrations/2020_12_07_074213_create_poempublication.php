<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoempublication extends Migration
{
    public function up()
    {
        Schema::table('poemPublication', function (Blueprint $table) {
            $table->increments('poemCode');
            $table->string('publicationCode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('poemPublication', function (Blueprint $table) {
            Schema::dropIfExists('poemPublication');
        });
    }
}
