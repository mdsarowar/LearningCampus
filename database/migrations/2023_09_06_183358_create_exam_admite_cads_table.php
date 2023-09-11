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
        Schema::create('exam_admite_cads', function (Blueprint $table) {
            $table->id();
            $table->string("student_class");
            $table->string("shift_name");
            $table->string("section");
            $table->string("exam_terem");
            $table->string("exam_part");
            $table->string("student_name");
            $table->string("student_id");
            $table->string("student_roll");
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
        Schema::dropIfExists('exam_admite_cads');
    }
};
