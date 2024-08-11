<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('department_id');
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->date('birth_date');
            $table->string('state', 50);
            $table->string('lga', 50);
            $table->string('gender', 50);
            $table->string('parent_first_name', 50)->nullable();
            $table->string('parent_last_name', 50)->nullable();
            $table->string('parent_email', 100)->nullable();
            $table->string('parent_address', 255)->nullable();
            $table->string('parent_phone_number', 20)->nullable();
            $table->integer('admission_status');
            $table->string('application_code', 20);
            $table->timestamps(); // Adds created_at and updated_at columns

            // Foreign key constraints
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('set null')->onUpdate('set null');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('set null')->onUpdate('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
