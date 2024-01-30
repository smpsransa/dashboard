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
        Schema::create('wifis', function (Blueprint $table) {
            $table->id();
            $table->string('ruang');
            $table->string('devices');
            $table->string('parent');
            $table->string('network');
            $table->string('ssid');
            $table->string('preview_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wifis');
    }
};
