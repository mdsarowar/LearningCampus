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
        Schema::create('board_results', function (Blueprint $table) {
            $table->id();
            $table->string('exam_type')->nullable();
            $table->string('year')->nullable();
            $table->string('total_student')->nullable();
            $table->string('passed')->nullable();
            $table->string('passed_persentage')->nullable();
            $table->string('a_plus')->nullable();
            $table->string('details')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('board_results');
    }
};
