<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class materielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materialType = new \App\Models\MaterielType([
                'type' => 'ordinateur'
        ]);
        $materialType->save();
        $materialType = new \App\Models\MaterielType([
            'type' => 'routeur'
        ]);
        $materialType->save();
        $materialType = new \App\Models\MaterielType([
            'type' => 'serveur'
        ]);
        $materialType->save();
        $materialType = new \App\Models\MaterielType([
            'type' => 'impriment'
        ]);
        $materialType->save();





        $marque = new \App\Models\Marque([
            'marque' => 'HP',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'dell',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'LENOVO',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'acer',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'APPLE',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'TOSHIBA',
            'materiel_type' => '1'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'cisco',
            'materiel_type' => '2'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'tplink',
            'materiel_type' => '2'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'ASUS',
            'materiel_type' => '2'
        ]);
        $marque->save();

        $marque = new \App\Models\Marque([
            'marque' => 'server hg',
            'materiel_type' => '3'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'server dse',
            'materiel_type' => '3'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'server hsdse',
            'materiel_type' => '3'
        ]);
        $marque->save();

        $marque = new \App\Models\Marque([
            'marque' => 'hp',
            'materiel_type' => '4'
        ]);
        $marque->save();
        $marque = new \App\Models\Marque([
            'marque' => 'imprimante',
            'materiel_type' => '4'
        ]);
        $marque->save();


        $modele = new \App\Models\Modèle([
            'Modèle'=> 'hp 1',
            'marque'=> '1'
        ]);
        $modele = new \App\Models\Modèle([
            'Modèle'=> 'hp 2',
            'marque'=> '1'
        ]);

        $modele = new \App\Models\Modèle([
            'Modèle'=> 'dell 1',
            'marque'=> '2'
        ]);
        $modele = new \App\Models\Modèle([
            'Modèle'=> 'dell 2',
            'marque'=> '2'
        ]);

        $modele = new \App\Models\Modèle([
            'Modèle'=> 'LENOVO 1',
            'marque'=> '3'
        ]);
        $modele = new \App\Models\Modèle([
            'Modèle'=> 'LENOVO 2',
            'marque'=> '3'
        ]);
    }
}
