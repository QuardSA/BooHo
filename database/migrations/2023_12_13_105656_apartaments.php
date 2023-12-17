<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->id();
            $table->string('title_apartaments');
            $table->string('count_people');
            $table->double('cost');
            $table->string('photo');
            $table->foreignId('object')->references('id')->on('type_objects');
            $table->timestamps();
        });
    }

    /**

Reverse the migrations.*/
    public function down(): void
    {
        Schema::dropIfExists('apartaments');
    }
};
