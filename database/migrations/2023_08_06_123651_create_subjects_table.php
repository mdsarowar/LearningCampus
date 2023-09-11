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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id')->autoIncrement();
            $table->string('subject_name');
            $table->string('class_name');
            $table->string('group_name');
            $table->string('class_type');
            $table->string('subject_Type');
            $table->string('is_optional');
            $table->string('combined_subject');
            $table->string('subject_code');
            $table->string('full_marks');
            $table->string('result_type');
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
        Schema::dropIfExists('subjects');
    }
};
