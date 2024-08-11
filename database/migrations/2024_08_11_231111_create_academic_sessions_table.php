<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('academic_sessions', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('session_year', 11);
        });
    }

    public function down()
    {
        Schema::dropIfExists('academic_sessions');
    }
}

