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
        Schema::create('student_attendences', function (Blueprint $table) {
            $table->id();
            $table->integer("student_id");
            $table->integer("roll");
            $table->string("class");
            $table->string("student_name");
            $table->string("shift");
            $table->date("date");
            $table->integer("time_in")->nullable();
            $table->integer("time_out")->nullable();
            $table->string("punch_in_zone")->nullable();
            $table->string("section");
            $table->integer("session");
            $table->string("guardian_name");
            $table->integer("guardian_mobil");
            $table->string("absent_status")->default("1");
            $table->string("verson")->nullable();
            $table->string("image")->nullable();
            $table->string("middle_punches")->nullable();
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
        Schema::dropIfExists('student_attendences');
    }
};
