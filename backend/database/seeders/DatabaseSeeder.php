<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * /opt/homebrew/bin/php artisan migrate:fresh --seed pour lancer remplir la BDD
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            RestaurantSeeder::class,
            UserSeeder::class,
        ]);
    }
}
