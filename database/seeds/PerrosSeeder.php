<?php

use Illuminate\Database\Seeder;
use App\Perro;

class PerrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Perro::create([
            'race' => 'Golden Retriever',
            'name' => 'Max',
            'size' => 'Mediano',
            'hair_color' => 'Dorado',
            'img_url' => 'https://example.com/max.jpg',
        ]);

        Perro::create([
            'race' => 'Labrador Retriever',
            'name' => 'Buddy',
            'size' => 'Grande',
            'hair_color' => 'Negro',
            'img_url' => 'https://example.com/buddy.jpg',
        ]);

    }
}
