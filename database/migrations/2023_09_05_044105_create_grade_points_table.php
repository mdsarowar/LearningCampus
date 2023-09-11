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
        Schema::create('grade_points', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->integer('start_mark');
            $table->integer('end_mark');
            $table->string('grade_letter');
            $table->integer('grade_point');
            $table->string('remark');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grade_points');
    }
};
