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
            ['name' => 'Pizza', 'imageUrl' => 'https://cdn.alternance-food.com/categories/pizza.jpg', 'imagePath' => 'storage/categories/pizza.jpg'],
            ['name' => 'Burger', 'imageUrl' => 'https://cdn.alternance-food.com/categories/burger.jpg', 'imagePath' => 'storage/categories/burger.jpg'],
            ['name' => 'Sushi', 'imageUrl' => 'https://cdn.alternance-food.com/categories/sushi.jpg', 'imagePath' => 'storage/categories/sushi.jpg'],
            ['name' => 'Italien', 'imageUrl' => 'https://cdn.alternance-food.com/categories/italien.jpg', 'imagePath' => 'storage/categories/italien.jpg'],
            ['name' => 'Asiatique', 'imageUrl' => 'https://cdn.alternance-food.com/categories/asiatique.jpg', 'imagePath' => 'storage/categories/asiatique.jpg'],
            ['name' => 'Français', 'imageUrl' => 'https://cdn.alternance-food.com/categories/francais.jpg', 'imagePath' => 'storage/categories/francais.jpg'],
            ['name' => 'Kebab', 'imageUrl' => 'https://cdn.alternance-food.com/categories/kebab.jpg', 'imagePath' => 'storage/categories/kebab.jpg'],
            ['name' => 'Healthy', 'imageUrl' => 'https://cdn.alternance-food.com/categories/healthy.jpg', 'imagePath' => 'storage/categories/healthy.jpg'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
