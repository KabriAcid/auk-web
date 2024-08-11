<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('username', 50);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('position_id');
            $table->string('qualification', 50);
            $table->string('discipline', 50);
            $table->string('bank_name', 50);
            $table->date('birth_date');
            $table->string('state', 50);
            $table->string('lga', 50);
            $table->string('gender', 50);
            $table->string('photo', 100)->default('uploads/default.png');
            $table->string('email', 50);
            $table->string('password', 255);
            $table->string('phone_number', 50);
            $table->string('status', 50);
            $table->string('address', 255);
            $table->decimal('salary', 10, 2);
            $table->string('account_number', 255);
            $table->timestamps(); // Adds created_at and updated_at columns

            // Foreign key constraints
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null')->onUpdate('set null');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null')->onUpdate('set null');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null')->onUpdate('set null');
            $table->foreign('position_id')->references('id')->on('school_positions')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
