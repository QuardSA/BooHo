<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // /**
    //  * Run the migrations.
    //  */
    // public function up(): void
    // {
    //         Schema::create('apartaments', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('Title_apartaments');
    //         $table->string('Count_people');
    //         $table->foreignId('Object')->reference('id')->on('objects');
    //         $table->double('Cost');
    //         $table->string('Photo');
    //         $table->timestamps();
    //     });

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('apartaments');
    // }
    public function up(): void
    {
        Schema::create('apartaments', function (Blueprint $table) {
            $table->id();
            $table->string('Title_apartaments');
            $table->string('Count_people');
            $table->double('Cost');
            $table->string('Photo');
            $table->foreignId('Object')->references('id')->on('type_objects');
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
