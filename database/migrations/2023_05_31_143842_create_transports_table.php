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
            $table->primary('transport_id');
            $table->string('starting_place')->nullable(false);
            $table->string('finishing_place')->nullable(false);
            $table->string('merchandise')->nullable(false);
            $table->double('mass')->nullable(false);
            $table->date('date_of_trans')->nullable(false);
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
