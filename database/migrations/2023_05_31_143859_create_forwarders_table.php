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
            $table->primary('forwarder_id');
            $table->string('f_name')->nullable(false);
            $table->string('f_surname')->nullable(false);
            $table->foreignId('user_id')->constrained('users')->nullable(false);
            $table->foreignId('company_id')->constrained('companies')->nullable(false);
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
