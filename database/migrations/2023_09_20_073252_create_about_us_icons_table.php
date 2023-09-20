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
        Schema::create('about_us_icons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('second_title');
            $table->string('third_title');
            $table->string('description');
            $table->string('second_description');
            $table->string('third_description');
            $table->string('icon');
            $table->string('second_icon');
            $table->string('third_icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_icons');
    }
};
