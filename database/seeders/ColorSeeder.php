<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Color::create([
            'name' => 'Red',
            'code' => '#FF0000',
        ]);

        Color::create([
            'name' => 'Blue',
            'code' => '#0000FF',
        ]);
    }
}
