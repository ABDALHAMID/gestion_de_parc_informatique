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
            'port' => 'Eternet',
            'mac_address' => '05:c3:f1:23:50:',
            'ip_address' => '192.168.0.1',
            'masque_reseau' => '255.255.255.0',
            'material' => '1'
        ];
    }
}
