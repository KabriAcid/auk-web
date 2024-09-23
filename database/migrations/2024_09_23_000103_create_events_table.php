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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('event_name'); // Name of the event
            $table->text('description')->nullable(); // Optional description of the event
            $table->dateTime('start_time'); // Starting time and date of the event
            $table->dateTime('end_time')->nullable(); // Optional end time and date of the event
            $table->string('location')->nullable(); // Optional location of the event
            $table->string('organizer')->nullable(); // Optional organizer name
            $table->timestamps(); // Laravel’s default fields (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
