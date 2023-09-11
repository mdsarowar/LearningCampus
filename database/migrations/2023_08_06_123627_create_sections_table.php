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
        Schema::create('sections', function (Blueprint $table) {
            $table->id('section_id')->autoIncrement();
            $table->string('section_name');
            $table->string('class_name');
            $table->string('class_type');
            $table->string('shift_name');
            $table->string('status');
            $table->string('created_at')->nullable();
            $table->string('created_by')->nullable();
            $table->string('modified_at')->nullable();
            $table->string('modified_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
};
