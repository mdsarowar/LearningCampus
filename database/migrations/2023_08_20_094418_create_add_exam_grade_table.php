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
        Schema::create('addexamgrade', function (Blueprint $table) {
            $table->id('addexamgrade_id')->autoIncrement();
            $table->string('classe');
            $table->integer('start_marks');
            $table->integer('end_marks');
            $table->string('grade_letter');
            $table->string('grade_point');
            $table->string('remarks');
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
        Schema::dropIfExists('addexamgrade');
    }
};
