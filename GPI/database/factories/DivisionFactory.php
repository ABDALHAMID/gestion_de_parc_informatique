<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Division>
 */
class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return ([
            'division'=> fake()->unique()->randomElement(['RH', 'DBR', 'Administration', 'informatique', 'Management', 'RD', 'Transport et Logistique', 'Comptabilité']),
        ]);
    }
}
