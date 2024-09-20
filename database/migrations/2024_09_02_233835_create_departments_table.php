<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id('department_id'); // Auto-incrementing primary key
            $table->string('department_name'); // Department name
            $table->Integer('college_id'); // Change this to Integer if needed
            $table->string('hod_name')->nullable(); // Head of Department's name
            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint
            $table->foreign('college_id')->references('college_id')->on('colleges')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
