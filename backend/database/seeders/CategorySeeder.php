<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * /opt/homebrew/bin/php artisan migrate:fresh --seed pour lancer remplir la BDD
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Pizza', 'photo' => 'pizza.jpg'],
            ['name' => 'Burger', 'photo' => 'burger.jpg'],
            ['name' => 'Sushi', 'photo' => 'sushi.jpg'],
            ['name' => 'Italien', 'photo' => 'italien.jpg'],
            ['name' => 'Asiatique', 'photo' => 'asiatique.jpg'],
            ['name' => 'Français', 'photo' => 'francais.jpg'],
            ['name' => 'Kebab', 'photo' => 'kebab.jpg'],
            ['name' => 'Healthy', 'photo' => 'healthy.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
