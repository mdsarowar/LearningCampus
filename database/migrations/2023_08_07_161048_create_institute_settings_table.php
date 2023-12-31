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
        Schema::create('institute_settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('facebook_page', 150)->nullable();
            $table->string('youtube_video', 150)->nullable();
            $table->string('admin_theme', 150)->nullable();
            $table->string('website_theme', 150)->nullable();
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
        Schema::dropIfExists('institute_settings');
    }
};
