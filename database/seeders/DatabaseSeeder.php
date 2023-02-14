<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // run the seed
        $this->call([
            UserSeeder::class,
            ColorSeeder::class
        ]);
    }
}
