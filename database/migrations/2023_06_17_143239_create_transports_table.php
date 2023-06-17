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
        Schema::create('transports', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('starting_place', 40)->nullable(false);
            $table->string('finishing_place', 40)->nullable(false);
            $table->string('merchandise', 40)->nullable(false);
            $table->double('mass')->nullable(false);
            $table->date('transport_date')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};
