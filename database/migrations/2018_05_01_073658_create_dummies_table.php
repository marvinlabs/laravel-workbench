<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDummiesTable extends Migration
{
    public function up()
    {
        Schema::create('dummies', function (Blueprint $table) {
            $table->increments('id');
            $table->date('expires_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dummies');
    }
}
