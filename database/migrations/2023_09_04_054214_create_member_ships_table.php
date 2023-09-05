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
        Schema::create('member_ships', function (Blueprint $table) {
            $table->id();
            $table->string('familyName');
            $table->string('firstName');
            $table->string('presentHomeAddress');
            $table->string('passportNumber');
            $table->string('cellNumber');
            $table->string('homeNumber');
            $table->string('emailAddress');
            $table->enum('membershipType', ['Individual', 'Family', 'Corporate']);
            $table->enum('residentOrTourist', ['Resident', 'Tourist']);
            $table->string('hotelName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ships');
    }
};
