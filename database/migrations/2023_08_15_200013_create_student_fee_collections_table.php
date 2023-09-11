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
        Schema::create('student_fee_collections', function (Blueprint $table) {
            $table->id();
            $table->integer("session");
            $table->string("student_class");
            $table->string("shift_name");
            $table->string("section");
            $table->string("fees_month");
            $table->string("student_name_id");
            $table->integer("total_fee");
            $table->integer("paid_fee");
            $table->integer("due_fee");
            $table->string("folio_no");
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
        Schema::dropIfExists('student_fee_collections');
    }
};
