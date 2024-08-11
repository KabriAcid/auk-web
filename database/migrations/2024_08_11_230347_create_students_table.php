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
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->string('jamb_no', 50);
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('status', 50);
            $table->string('password', 255);
            $table->date('birth_date');
            $table->string('state', 100);
            $table->string('lga', 100);
            $table->string('gender', 10);
            $table->string('parent_first_name', 50)->nullable();
            $table->string('parent_last_name', 50)->nullable();
            $table->string('parent_email', 100)->nullable();
            $table->string('parent_address', 255)->nullable();
            $table->string('parent_phone_number', 20)->nullable();

            // Foreign key constraints
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('set null')->onUpdate('set null');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null')->onUpdate('set null');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('set null')->onUpdate('set null');

            $table->timestamps(); // Adds created_at and updated_at columns
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
