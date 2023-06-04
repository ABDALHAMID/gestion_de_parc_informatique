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
        \App\Models\MaterielType::factory(1)->create();
        \App\Models\Marque::factory(1)->create();
        \App\Models\Modèle::factory(1)->create();
        \App\Models\Division::factory(1)->create();
        \App\Models\Materiel::factory(1)->create();
        \App\Models\Port::factory(1)->create();

        $this->call(materielSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
