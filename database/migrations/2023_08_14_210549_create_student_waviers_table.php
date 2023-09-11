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
        Schema::create('student_waviers', function (Blueprint $table) {
            $table->id();
            $table->integer("session");
            $table->string("student_class");
            $table->string("shift_name");
            $table->string("section");
            $table->string("student_name_id");
            $table->string("fees_type");
            $table->string("waived_month");
            $table->string("status");
            $table->integer("wavier");
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
        Schema::dropIfExists('student_waviers');
    }
};
