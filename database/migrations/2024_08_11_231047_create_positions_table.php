<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Positions extends Migration
{
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('position_name', 50);
            $table->integer('position_number');
        });
    }

    public function down()
    {
        Schema::dropIfExists('positions');
    }
}

