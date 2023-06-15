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
            'division'=> fake()->unique()->randomElement(['DRH', 'DAS', 'DE', 'DEC', 'DBM', 'DT', 'DAR', 'DCL', 'DUA', 'DLA', 'Cabinet', 'D.P.A.I', 'IT']),
        ]);
    }
}
