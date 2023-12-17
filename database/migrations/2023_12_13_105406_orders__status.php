<?php

use Database\Seeders\OrderStatusSeed;
use Illuminate\Support\Facades\Artisan;
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
        Schema::create('orders_status', function (Blueprint $table) {
            $table->id();
            $table->string('title_status');
            $table->timestamps();

        });
        Artisan::call('db:seed', ['--class'=>OrderStatusSeed::class]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_status');
    }
};
