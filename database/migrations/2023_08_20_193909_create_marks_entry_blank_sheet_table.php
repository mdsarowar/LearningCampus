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
        Schema::create('marks_entry_blank_sheet', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('session');
            $table->string('class');
            $table->string('group');
            $table->string('shift');
            $table->string('section');
            $table->string('exam_term');
            $table->string('exam_part');
            $table->string('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks_entry_blank_sheet');
    }
};
