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
        Schema::create('drivers__transports', function (Blueprint $table) {
            $table->foreignId('driver_id')->constrained('drivers')->primary();
            $table->foreignId('transport_id')->constrained('transports')->primary();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers__transports');
    }
};
