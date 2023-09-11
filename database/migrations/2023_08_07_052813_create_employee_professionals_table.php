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
        Schema::create('employee_professionals', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->bigInteger('employeetype_id');
            $table->bigInteger('employee_id');
            $table->string('employee_idnumber')->nullable();
            $table->bigInteger('designation_id');
            $table->bigInteger('workingshift_id');
            $table->string('grade')->nullable();
            $table->string('rank')->nullable();
            $table->string('divice_serial')->nullable();
            $table->string('rfid_card')->nullable();
            $table->string('tracking_id')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('pre_inst')->nullable();
            $table->string('pre_des')->nullable();
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
        Schema::dropIfExists('employee_professionals');
    }
};
