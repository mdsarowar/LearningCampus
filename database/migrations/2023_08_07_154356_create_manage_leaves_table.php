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
        Schema::create('manage_leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('employeetype_id');
            $table->integer('leave_type_id');
            $table->date('from_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->integer('status');
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
        Schema::dropIfExists('manage_leaves');
    }
};
