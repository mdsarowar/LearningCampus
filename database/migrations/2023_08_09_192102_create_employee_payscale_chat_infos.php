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
        Schema::create('employee_payscale_chat_infos', function (Blueprint $table) {
            $table->id();
            $table->string('fee_type', 150)->nullable();
            $table->string('head_type', 150)->nullable();
            $table->string('amount', 255)->nullable();
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
        Schema::dropIfExists('employee_payscale_chat_infos');
    }
};
