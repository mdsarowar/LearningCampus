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
        Schema::create('academic_holidays', function (Blueprint $table) {
            $table->id();
            $table->string('type', 150)->nullable();
            $table->string('title', 255)->nullable();
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
        Schema::dropIfExists('academic_holidays');
    }
};
