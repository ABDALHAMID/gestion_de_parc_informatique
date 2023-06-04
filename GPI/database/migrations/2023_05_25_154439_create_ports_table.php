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
        Schema::create('ports', function (Blueprint $table) {
            $table->id();
            $table->string('port');
            $table->macAddress('mac_address');
            $table->ipAddress('ip_address');
            $table->ipAddress('masque_reseau');
            $table->foreignId('material')
                  ->constrained(table: 'materiels')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ports');
    }
};
