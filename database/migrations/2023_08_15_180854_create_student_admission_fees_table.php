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
        Schema::create('student_admission_fees', function (Blueprint $table) {
            $table->id();
            $table->integer("session");
            $table->string("student_class");
            $table->string("shift_name");
            $table->string("section");
            $table->string("gender");
            $table->string("student_name_id");
            $table->string("Education");
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
        Schema::dropIfExists('student_admission_fees');
    }
};
