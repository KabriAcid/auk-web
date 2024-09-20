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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('program_id');                   // Primary key, auto-incrementing INT
            $table->string('program_name');             // Name of the program
            $table->unsignedBigInteger('department_id'); // Foreign key to departments table
            $table->timestamps();                       // Created at and updated at timestamps

            // Foreign key constraint linking to the departments table
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
