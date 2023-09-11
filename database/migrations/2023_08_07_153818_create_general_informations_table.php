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
        Schema::create('general_informations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('institute_id')->nullable();
            $table->string('eiin_no', 150)->nullable();
            $table->string('institue_name', 255)->nullable();
            $table->string('slogan', 150)->nullable();
            $table->string('email')->unique();
            $table->string('favicon', 50)->nullable();
            $table->string('banner', 50)->nullable();
            $table->string('logo', 50)->nullable();
            $table->mediumText('short_description', 2550)->nullable();
            $table->mediumText('why_choose_institute', 2550)->nullable();
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
        Schema::dropIfExists('general_informations');
    }
};
