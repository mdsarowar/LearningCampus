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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id('session_id')->autoIncrement();
            $table->integer('session_name');
            $table->integer('session_code');
            $table->string('is_fiscal_year');
            $table->string('is_current_session');
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
        Schema::dropIfExists('sessions');
    }
};
