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
        \App\Models\MaterielType::factory()->create(['type' => 'ordinateur']);
        \App\Models\MaterielType::factory()->create(['type' => 'routeur']);
        \App\Models\MaterielType::factory()->create(['type' => 'serveur']);
        \App\Models\MaterielType::factory()->create(['type' => 'imprimante']);
        \App\Models\MaterielType::factory()->create(['type' => 'switch']);
        //\App\Models\MaterielType::factory(5)->create();
        \App\Models\Division::factory(8)->create();
        \App\Models\Marque::factory(100)->create();
        \App\Models\Modèle::factory(500)->create();

        \App\Models\Materiel::factory(5247)->create(['materiel_type'=>'2']);
        \App\Models\Materiel::factory(1040)->create(['materiel_type'=>'3']);
        \App\Models\Materiel::factory(10578)->create(['materiel_type'=>'4']);
        \App\Models\Materiel::factory(2785)->create(['materiel_type'=>'5']);
        \App\Models\Materiel::factory(4572)->create(['état'=>'très bon']);
        \App\Models\Materiel::factory(45)->create(['état'=>'bien']);
        \App\Models\Materiel::factory(1025)->create(['état'=>'moyen']);
        \App\Models\Materiel::factory(2126)->create(['état'=>'mauvais']);
        \App\Models\Materiel::factory(20572)->create(['materiel_type'=>'1']);


        \App\Models\Port::factory(60000)->create();

        //$this->call(materielSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
