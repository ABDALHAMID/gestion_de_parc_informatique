<?php

namespace Database\Factories;

use App\Models\Marque;
use App\Models\Modèle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $materielType = fake()->numberBetween(1, 6);
        $marque = Marque::where('materiel_type', $materielType)->inRandomOrder()->first();
        $modele = Modèle::where('marque', $marque->id)->inRandomOrder()->first();
        if($modele == null)$modele = 1;
        return [
            'materiel_type' => $materielType,
            'marque' => $marque,
            'modèle' => $modele,
            'N_serie' => fake()->numerify('NS######'),
            'N_Inventair' => fake()->numerify('NI######'),
            'affectation' => fake()->numberBetween(1,13),
            'caractéristiques' => fake()->numerify('ram: ## GB, disque: ### GB, prossesor: i# #520k, cart graphique: rtx ####'),
            'date_aqusition' => fake()->dateTimeBetween('2007-01-01', 'now')->format('Y-m-d'),
            'état' => fake()->randomElement(['très bon','bien','moyen','mauvais', 'hors service', 'mantenance']),
        ];
    }
}
