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
        Schema::create('objects', function (Blueprint $table) {
            $table->id();
            $table->string('Title_object');
            $table->text('Description');
            $table->foreignId('Country')->references('id')->on('countries');
            $table->foreignId('Placement')->references('id')->on('type_placements');
            $table->foreignId('Category')->references('id')->on('categories');
            $table->foreignId('Apartament')->references('id')->on('apartaments');
            $table->string('Check_in');
            $table->string('Check_out');
            $table->foreignId('User')->references('id')->on('users');
            $table->string('Address');
            $table->string('City');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('objects');
    }
};
