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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');                           // Primary key, auto-incrementing INT
            $table->string('first_name');                     // Staff member's first name
            $table->string('last_name');                      // Staff member's last name
            $table->string('rank');                          // Staff member's rank or title
            $table->string('responsibility');                // Staff member's responsibilities
            $table->string('image')->nullable();              // URL or path to the staff member's profile image
            $table->string('email')->unique();                // Contact email address
            $table->string('phone')->nullable();             // Contact phone number
            $table->text('biography')->nullable();           // Brief biography
            $table->string('gender')->nullable();            // Gender of the staff member
            $table->unsignedBigInteger('department_id');     // Foreign key to departments table
            $table->timestamps();                           // Created at and updated at timestamps

            // Foreign key constraint linking to the departments table
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
