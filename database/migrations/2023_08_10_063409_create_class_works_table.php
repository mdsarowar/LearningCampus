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
        Schema::create('class_works', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('shift');
            $table->string('section');
            $table->string('subject');
            $table->string('teacher');
            $table->string('class_work_title');
            $table->string('video_url')->nullable();
            $table->string('attachment')->nullable();
            $table->date('assign_date');
            $table->date('due_date');
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
        Schema::dropIfExists('class_works');
    }
};
