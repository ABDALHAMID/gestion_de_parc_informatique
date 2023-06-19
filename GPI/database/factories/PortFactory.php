<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Port>
 */
class PortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'port' => fake()->numerify('P##-###'),
            'mac_address' => fake()->unique()->macAddress(),
            'ip_address' => fake()->ipv4(),
            'masque_reseau' => fake()->randomElement(['255.255.255.0', '255.255.0.0', '255.0.0.0','255.255.255.128','255.255.255.192','255.255.128.0','255.255.192.0','255.255.255.252']),
            'material' => fake()->numberBetween(1, 47990)
        ];
    }
}
