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
        Schema::create('marks_entry_exam', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->string('class');
            $table->string('shift');
            $table->string('section');
            $table->string('exam_term');
            $table->string('exam_part');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks_entry_exam');
    }
};
