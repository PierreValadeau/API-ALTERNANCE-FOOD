<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   /**
     * /opt/homebrew/bin/php artisan migrate:fresh --seed pour lancer remplir la BDD
     */
    public function run(): void
    {
        $users = [
            [
                'firstName' => 'Pierre',
                'lastName' => 'Valadeau',
                'email' => 'pierre.valadeau@test.com',
                'password' => 'password123',
            ],
            [
                'firstName' => 'Sophie',
                'lastName' => 'Bernard',
                'email' => 'sophie.bernard@test.com',
                'password' => 'password123',
            ],
            [
                'firstName' => 'Lucas',
                'lastName' => 'Dubois',
                'email' => 'lucas.dubois@test.com',
                'password' => 'password123',
            ],
            [
                'firstName' => 'Emma',
                'lastName' => 'Petit',
                'email' => 'emma.petit@test.com',
                'password' => 'password123',
            ],
            [
                'firstName' => 'Hugo',
                'lastName' => 'Moreau',
                'email' => 'hugo.moreau@test.com',
                'password' => 'password123',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
