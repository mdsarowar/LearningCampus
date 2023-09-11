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
        Schema::create('payroll_heads', function (Blueprint $table) {
            $table->id();
            $table->string('categories', 150)->nullable();
            $table->string('absent_deductions', 150)->nullable();
            $table->string('parents', 255)->nullable();
            $table->string('heads', 255)->nullable();
            $table->string('payroll_code', 150)->nullable();
            $table->string('payroll_period', 255)->nullable();
            $table->string('has_child', 150)->nullable();
            $table->string('status', 150)->nullable();
            $table->string('created_by');
            $table->string('created_at');
            $table->string('modified_by');
            $table->string('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payroll_heads');
    }
};
