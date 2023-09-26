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
        Schema::table('john_sanford', function (Blueprint $table) {
            // 2 new columns added pdf 
            $table->string('pdf_rating')->nullable();
            $table->string('pdf_fact_sheet')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('john_sanford', function (Blueprint $table) {
            //
        });
    }
};
