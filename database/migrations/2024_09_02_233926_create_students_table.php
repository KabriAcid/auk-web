<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->foreignId('department_id')->constrained('departments', 'department_id')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses', 'course_id')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('level');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth');
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->date('enrollment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
