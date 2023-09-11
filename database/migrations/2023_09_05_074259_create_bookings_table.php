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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('surname');
            $table->string('emailAddress');
            $table->string('hotelName');
            $table->string('hole_9')->nullable();
            $table->string('hole_18')->nullable();
            $table->string('drivingRange')->nullable();
            $table->string('rangeBalls')->nullable();
            $table->string('golfClubs9')->nullable();
            $table->string('golfClubs18')->nullable();
            $table->string('golfCar9')->nullable();
            $table->string('golfCar18')->nullable();
            $table->string('golfCar3x18')->nullable();
            $table->string('golfCar5x18')->nullable();
            $table->string('golfCar3x9')->nullable();
            $table->integer('menRightHandNumber')->nullable();
            $table->integer('menLeftHandNumber')->nullable();
            $table->integer('womanRightHandNumber')->nullable();
            $table->integer('womanLeftHandNumber')->nullable();
            $table->string('name');
            $table->string('date');
            $table->string('totalPrice')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
