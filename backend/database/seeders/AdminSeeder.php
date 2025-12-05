<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * /**
     * /opt/homebrew/bin/php artisan migrate:fresh --seed pour lancer remplir la BDD
     */
    public function run(): void
    {
        $admins = [
            [
                'firstName' => 'Admin',
                'lastName' => 'Principal',
                'email' => 'admin@alternance-food.com',
                'password' => 'admin123',
            ],
            [
                'firstName' => 'Marie',
                'lastName' => 'Dupont',
                'email' => 'marie.dupont@alternance-food.com',
                'password' => 'admin123',
            ],
            [
                'firstName' => 'Thomas',
                'lastName' => 'Martin',
                'email' => 'thomas.martin@alternance-food.com',
                'password' => 'admin123',
            ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
