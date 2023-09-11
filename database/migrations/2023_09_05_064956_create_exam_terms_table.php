<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_terms', function (Blueprint $table) {
            $table->id();
            $table->integer('session');
            $table->string('term_name');
            $table->integer('marks_final');
            $table->integer('relate_final_term');
            $table->integer('final_term');
            $table->integer('exam_ins');
            $table->integer('web_result_publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_terms');
    }
};
