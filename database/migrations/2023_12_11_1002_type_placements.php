<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\TypePlacementSeed;
use Illuminate\Support\Facades\Artisan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_placements', function (Blueprint $table) {
            $table->id();
            $table->string('title_placement');
            $table->timestamps();
        });
        Artisan::call('db:seed', ['--class'=>TypePlacementSeed::class]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_placements');
    }
};
