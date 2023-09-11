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
        Schema::create('live_classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->string('shift');
            $table->string('section');
            $table->string('subject_name');
            $table->string('teacher');
            $table->string('class_topic');
            $table->date('class_date'); 
            $table->time('class_time'); 
            $table->integer('duration'); 
            $table->string('password'); 
            $table->integer('status'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('live_classes');
    }
};
