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
        Schema::table('marks_entry_blank_sheet', function (Blueprint $table) {
            Schema::table('marks_entry_blank_sheet', function (Blueprint $table) {
                $table->string('class')->change(); // Change data type to string
                $table->string('group')->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marks_entry_blank_sheet', function (Blueprint $table) {
            //
        });
    }
};
