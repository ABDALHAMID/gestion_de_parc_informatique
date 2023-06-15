<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MaterielType>
 */
class MaterielTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=> fake()->unique()->randomElement(['ordinateur', 'routeur', 'serveur', 'imprimante', 'switch', 'projecteur']),
        ];
    }
}
