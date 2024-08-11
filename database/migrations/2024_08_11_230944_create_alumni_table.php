<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id(); // Primary Key with auto-increment
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('phone_number', 20)->nullable();
            $table->string('email', 100);
            $table->string('address', 255)->nullable();
            $table->date('birth_date');
            $table->string('gender', 10)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('lga', 100);
            $table->string('index_no', 10);
            $table->year('graduation_year');
            $table->string('position_held', 100)->nullable();
            $table->string('photo', 100)->default('uploads/default.png');
            $table->string('nin_number', 20)->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('alumni');
    }
}
