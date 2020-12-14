<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoems extends Migration
{
    public function up()
    {
        Schema::table('poem', function (Blueprint $table) {
            $table->increments('poemCode');
            $table->string('poemTitle', 50);
            $table->string('poemContents');
            $table->string('poetCode');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('poem', function (Blueprint $table) {
            Schema::dropIfExists('poem');
        });
    }
}
