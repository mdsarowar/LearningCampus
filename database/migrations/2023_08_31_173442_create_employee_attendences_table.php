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
        Schema::create('employee_attendences', function (Blueprint $table) {
            $table->id();
            $table->string("designation");
            $table->string("employee_name");
            $table->string("employee_id")->nullable();
            $table->string("in_time")->nullable();
            $table->string("out_time")->nullable();
            $table->string("punch_zone")->nullable();
            $table->date("attendence_date");
            $table->string("employee_type");
            $table->string("working_shift");
            $table->string("employee_image")->nullable();
            $table->string("employee_mobile");
            $table->string("month");
            $table->integer("year");
            $table->string("attendences_status")->default("1");
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
        Schema::dropIfExists('employee_attendences');
    }
};
