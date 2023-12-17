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
        Schema::create('orders_orderstatus', function (Blueprint $table) {
            $table->id();
            $table->foreignid('orders')->references('id')->on('orders');
            $table->foreignid('status')->references('id')->on('orders_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_orderstatus');
    }
};
