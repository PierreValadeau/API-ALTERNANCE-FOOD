<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Category;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * /opt/homebrew/bin/php artisan migrate:fresh --seed pour lancer remplir la BDD
     */
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'La Bella Pizza',
                'address' => '15 rue de la Paix, 75002 Paris',
                'latitude' => 48.86956520,
                'longitude' => 2.33124590,
                'rating' => 4.5,
                'imageUrl' => 'https://cdn.alternance-food.com/restaurants/bella-pizza.jpg',
                'imagePath' => 'storage/restaurants/bella-pizza.jpg',
                'description' => 'Pizzeria italienne authentique avec four à bois',
                'categories' => ['Pizza', 'Italien'],
            ],
            [
                'name' => 'Burger House',
                'address' => '32 avenue des Champs-Élysées, 75008 Paris',
                'latitude' => 48.87001820,
                'longitude' => 2.30766340,
                'rating' => 4.2,
                'imageUrl' => 'https://cdn.alternance-food.com/restaurants/burger-house.jpg',
                'imagePath' => 'storage/restaurants/burger-house.jpg',
                'description' => 'Burgers gourmets avec viande française',
                'categories' => ['Burger'],
            ],
            [
                'name' => 'Tokyo Sushi Bar',
                'address' => '8 rue Saint-Anne, 75001 Paris',
                'latitude' => 48.86598430,
                'longitude' => 2.33568120,
                'rating' => 4.8,
                'imageUrl' => 'https://cdn.alternance-food.com/restaurants/tokyo-sushi.jpg',
                'imagePath' => 'storage/restaurants/tokyo-sushi.jpg',
                'description' => 'Sushi frais préparés par des chefs japonais',
                'categories' => ['Sushi', 'Asiatique'],
            ],
            [
                'name' => 'Le Gourmet',
                'address' => '25 rue du Faubourg Saint-Honoré, 75008 Paris',
                'latitude' => 48.87021530,
                'longitude' => 2.31658920,
                'rating' => 4.7,
                'imageUrl' => 'https://cdn.alternance-food.com/restaurants/le-gourmet.jpg',
                'imagePath' => 'storage/restaurants/le-gourmet.jpg',
                'description' => 'Cuisine française gastronomique',
                'categories' => ['Français'],
            ],
            [
                'name' => 'Green Bowl',
                'address' => '18 rue de Rivoli, 75004 Paris',
                'latitude' => 48.85685420,
                'longitude' => 2.35494560,
                'rating' => 4.3,
                'imageUrl' => 'https://cdn.alternance-food.com/restaurants/green-bowl.jpg',
                'imagePath' => 'storage/restaurants/green-bowl.jpg',
                'description' => 'Bowls healthy et bio',
                'categories' => ['Healthy'],
            ],
        ];

        foreach ($restaurants as $restaurantData) {
            $categoryNames = $restaurantData['categories'];
            unset($restaurantData['categories']);

            $restaurant = Restaurant::create($restaurantData);

            // Attacher les catégories
            $categories = Category::whereIn('name', $categoryNames)->get();
            $restaurant->categories()->attach($categories->pluck('id'));
        }
    }
}
