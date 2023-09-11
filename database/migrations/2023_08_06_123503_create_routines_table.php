<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->id('routine_id')->autoIncrement();
            $table->string('routine_day');
            $table->string('class_name');
            $table->string('class_type');
            $table->string('shift_name');
            $table->string('section_name');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('subject_name');
            $table->string('teacher_name');
            $table->string('break_time');
            $table->string('start_break_time');
            $table->string('end_break_time');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
};
