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
        Schema::create('drivers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 30)->nullable(false);
            $table->string('surname', 30)->nullable(false);
            $table->string('car', 30)->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->integer('forwarder_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('forwarder_id')->references('id')->on('forwarders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
