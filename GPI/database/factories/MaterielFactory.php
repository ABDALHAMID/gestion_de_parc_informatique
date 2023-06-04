<?php

namespace Database\Factories;

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
        return [
            'materiel_type' => '1',
            'marque' => '1',
            'modèle' => '1',
            'N_serie' => '25d15e3f',
            'N_Inventair' => 'fs652s48',
            'affectation' => '1',
            'caractéristiques' => '16 ram',
            'date_aqusition' => '2003-05-08',
            'état' => 'bien',

        ];
    }
}
