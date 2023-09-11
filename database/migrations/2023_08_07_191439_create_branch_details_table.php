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
        Schema::create('branch_details', function (Blueprint $table) {
            $table->id();
            $table->string('short_name', 150)->nullable();
            $table->string('branch_name', 255)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('city', 150)->nullable();
            $table->string('zip_code', 50)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('fax', 50)->nullable();
            $table->string('email')->unique();
            $table->string('signature', 50)->nullable();
            $table->string('holiday', 50)->nullable();
            $table->string('map_iframe', 50)->nullable();
            $table->string('status', 50)->nullable();
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
        Schema::dropIfExists('branch_details');
    }
};
