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
        Schema::create('finances', function (Blueprint $table) {
            $table->id('account_id')->autoIncrement();
            $table->string('account_type');
            $table->string('account_category');
            $table->string('account_parents');
            $table->string('account_code');
            $table->string('account_head');
            $table->string('account_period');
            $table->string('has_child');
            $table->string('status');
            $table->string('created_by')->nullable();
            $table->string('created_at')->nullable();
            $table->string('modified_by')->nullable();
            $table->string('modified_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finances');
    }
};
