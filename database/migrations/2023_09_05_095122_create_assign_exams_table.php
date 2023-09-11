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
        Schema::create('assign_exams', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->integer('exam_term_id');
            $table->integer('exam_part_id');
            $table->integer('indi_pass');
            $table->integer('absent_fail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_exams');
    }
};
