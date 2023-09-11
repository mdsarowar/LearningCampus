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
        Schema::create('employee_payscale_general_infos', function (Blueprint $table) {
            $table->id();
            $table->string('pay_scale_title', 150)->nullable();
            $table->string('employee_type', 150)->nullable();
            $table->string('basic_salary', 255)->nullable();
            $table->string('status', 150)->nullable();
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
        Schema::dropIfExists('employee_payscale_general_infos');
    }
};
