<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\MaterielType::factory()->create(['type' => 'ordinateur']);
        // \App\Models\MaterielType::factory()->create(['type' => 'routeur']);
        // \App\Models\MaterielType::factory()->create(['type' => 'serveur']);
        // \App\Models\MaterielType::factory()->create(['type' => 'imprimante']);
        // \App\Models\MaterielType::factory()->create(['type' => 'switch']);
        \App\Models\MaterielType::factory(5)->create();
        \App\Models\Division::factory(8)->create();
        \App\Models\Marque::factory(500)->create();
        \App\Models\Modèle::factory(2000)->create();

        \App\Models\Materiel::factory(5000)->create();
        \App\Models\Port::factory(15000)->create();

        //$this->call(materielSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
