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
        Schema::create('forwarders', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->nullable(false);
            $table->string('surname')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->integer('company_id')->nullable(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forwarders');
    }
};
