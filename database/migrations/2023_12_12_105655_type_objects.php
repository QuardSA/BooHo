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
        Schema::create('type_objects', function (Blueprint $table) {
            $table->id();
            $table->string('title_object');
            $table->text('tescription');
            $table->foreignId('country')->references('id')->on('countries');
            $table->foreignId('placement')->references('id')->on('type_placements');
            $table->foreignId('category')->references('id')->on('categories');
            $table->string('check_in');
            $table->string('check_out');
            $table->foreignId('user')->references('id')->on('users');
            $table->string('address');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_objects');
    }
};
