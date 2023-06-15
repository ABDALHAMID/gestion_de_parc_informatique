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
        // create materiel types
        \App\Models\MaterielType::factory()->create(['type' => 'ordinateur']);
        \App\Models\MaterielType::factory()->create(['type' => 'routeur']);
        \App\Models\MaterielType::factory()->create(['type' => 'serveur']);
        \App\Models\MaterielType::factory()->create(['type' => 'imprimante']);
        \App\Models\MaterielType::factory()->create(['type' => 'switch']);
        \App\Models\MaterielType::factory()->create(['type' => 'projecteur']);
        // create divisions
        \App\Models\Division::factory(13)->create();

        \App\Models\Marque::factory()->create(['marque' => 'Dell', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'HP', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Lenovo', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Asus', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Acer', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Apple', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Microsoft', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'MSI', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Toshiba', 'materiel_type' => '1']);
        \App\Models\Marque::factory()->create(['marque' => 'Samsung', 'materiel_type' => '1']);

        \App\Models\Marque::factory()->create(['marque' => 'Canon', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Epson', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'HP', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Brother', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Xerox', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Lexmark', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Samsung', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Ricoh', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Kyocera', 'materiel_type' => '4']);
        \App\Models\Marque::factory()->create(['marque' => 'Panasonic', 'materiel_type' => '4']);

        \App\Models\Marque::factory()->create(['marque' => 'HPE', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Cisco', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Fujitsu', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'IBM', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Supermicro', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Oracle', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Huawei', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Inspur', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'Dell', 'materiel_type' => '3']);
        \App\Models\Marque::factory()->create(['marque' => 'HP', 'materiel_type' => '3']);

        \App\Models\Marque::factory()->create(['marque' => 'Juniper Networks', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'HPE', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'MikroTik', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'TP-Link', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'Netgear', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'Asus', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'D-Link', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'Ubiquiti Networks', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'Zyxel', 'materiel_type' => '2']);
        \App\Models\Marque::factory()->create(['marque' => 'Cisco', 'materiel_type' => '2']);

        \App\Models\Marque::factory()->create(['marque' => 'Cisco', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'HPE', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Juniper Networks', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Netgear', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'TP-Link', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'D-Link', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Extreme Networks', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Allied Telesis', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Zyxel', 'materiel_type' => '5']);
        \App\Models\Marque::factory()->create(['marque' => 'Dell', 'materiel_type' => '5']);

        \App\Models\Marque::factory()->create(['marque' => 'Epson', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'Optoma', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'BenQ', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'ViewSonic', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'Sony', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'Acer', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'LG', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'Panasonic', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'NEC', 'materiel_type' => '6']);
        \App\Models\Marque::factory()->create(['marque' => 'Dell', 'materiel_type' => '6']);
        \App\Models\Modèle::factory(600)->create();

        \App\Models\Materiel::factory(5247)->create(['materiel_type'=>'2']);
        \App\Models\Materiel::factory(1040)->create(['materiel_type'=>'3']);
        \App\Models\Materiel::factory(10578)->create(['materiel_type'=>'4']);
        \App\Models\Materiel::factory(2785)->create(['materiel_type'=>'5']);
        \App\Models\Materiel::factory(4572)->create(['état'=>'très bon']);
        \App\Models\Materiel::factory(45)->create(['état'=>'mantenance']);
        \App\Models\Materiel::factory(1025)->create(['état'=>'hors service']);
        \App\Models\Materiel::factory(2126)->create(['état'=>'mauvais']);
        \App\Models\Materiel::factory(20572)->create(['materiel_type'=>'1']);


        \App\Models\Port::factory(145000)->create();

        //$this->call(materielSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
