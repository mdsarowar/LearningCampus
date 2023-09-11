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
        Schema::create('seat_plans', function (Blueprint $table) {
            $table->id();
            $table->integer('session');
            $table->string('class_name');
            $table->integer('exam_term_id');
            $table->integer('student_id');
            $table->string('name');
            $table->string('Shift');
            $table->string('section');
            $table->string('floor');
            $table->string('room');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_plans');
    }
};
