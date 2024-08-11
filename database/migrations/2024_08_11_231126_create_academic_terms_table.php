<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermsTable extends Migration
{
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('semester_name', 10);
        });
    }

    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
