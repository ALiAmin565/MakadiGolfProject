<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('facility_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('facility_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('facility_id')
                ->references('id')
                ->on('facilities')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('facility_images');
    }
};
