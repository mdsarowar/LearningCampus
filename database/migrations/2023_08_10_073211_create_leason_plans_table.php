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
        Schema::create('leason_plans', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('shift');
            $table->string('section');
            $table->string('subject');
            $table->string('teacher');
            $table->string('leason_title');
            $table->string('chapter');
            $table->string('page_number');
            $table->string('view_url')->nullable();
            $table->string('attachment')->nullable();
            $table->string('leason_plan_detail');
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
        Schema::dropIfExists('leason_plans');
    }
};
