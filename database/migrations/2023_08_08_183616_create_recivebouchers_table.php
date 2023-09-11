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
        Schema::create('recivebouchers', function (Blueprint $table) {
            $table->id();
            $table->string('boucher_no')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('select_head')->nullable();
            $table->double('amount')->nullable();
            $table->string('remarks')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('recivebouchers');
    }
};
