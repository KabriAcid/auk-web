<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id'); // Primary Key
            $table->string('first_name'); // Student’s first name
            $table->string('last_name'); // Student’s last name
            $table->string('email')->unique(); // Student’s email address
            $table->unsignedInteger('level'); // Student’s academic level
            $table->unsignedBigInteger('department_id'); // Foreign Key to Departments table
            $table->unsignedBigInteger('course_id'); // Foreign Key to Courses table
            $table->timestamps(); // created_at and updated_at columns

            // Add foreign key constraints
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
