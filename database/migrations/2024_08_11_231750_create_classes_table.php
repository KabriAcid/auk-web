<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('class_name', 50);
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('semester_id');
            // Foreign key constraints
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null')->onUpdate('set null');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
