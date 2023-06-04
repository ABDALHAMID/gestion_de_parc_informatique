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
        Schema::create('materiels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('materiel_type')
                  ->constrained(table: 'materiel_types')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('marque')
                  ->constrained(table: 'marques')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->foreignId('modèle')
                  ->constrained(table: 'Modèles')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->string('N_serie');
            $table->string('N_Inventair');
            $table->foreignId('affectation')
                  ->constrained(table: 'divisions')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            $table->string('caractéristiques');
            $table->date('date_aqusition');
            $table->enum('état',['très bon','bien','moyen','mauvais']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiels');
    }
};
