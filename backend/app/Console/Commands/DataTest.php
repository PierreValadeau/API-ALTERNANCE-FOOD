<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Console\Command;

class DataTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Affiche la liste des admins, catégories, restaurants et utilisateurs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('=== LISTE DES ADMINS ===');
        $admins = Admin::all();
        
        if ($admins->isEmpty()) {
            $this->warn('Aucun admin trouvé.');
        } else {
            $this->table(
                ['ID', 'Prénom', 'Nom', 'Email'],
                $admins->map(fn($admin) => [
                    $admin->id,
                    $admin->firstName,
                    $admin->lastName,
                    $admin->email,
                ])
            );
        }

        $this->newLine();

        $this->info('=== LISTE DES CATÉGORIES ===');
        $categories = Category::all();
        
        if ($categories->isEmpty()) {
            $this->warn('Aucune catégorie trouvée.');
        } else {
            $this->table(
                ['ID', 'Nom', 'Photo'],
                $categories->map(fn($category) => [
                    $category->id,
                    $category->name,
                    $category->photo ?? 'N/A',
                ])
            );
        }

        $this->newLine();

        $this->info('=== LISTE DES RESTAURANTS ===');
        $restaurants = Restaurant::all();
        
        if ($restaurants->isEmpty()) {
            $this->warn('Aucun restaurant trouvé.');
        } else {
            $this->table(
                ['ID', 'Nom', 'Adresse', 'Note'],
                $restaurants->map(fn($restaurant) => [
                    $restaurant->id,
                    $restaurant->name,
                    $restaurant->address,
                    $restaurant->rating,
                ])
            );
        }

        $this->newLine();

        $this->info('=== LISTE DES UTILISATEURS ===');
        $users = User::all();
        
        if ($users->isEmpty()) {
            $this->warn('Aucun utilisateur trouvé.');
        } else {
            $this->table(
                ['ID', 'Prénom', 'Nom', 'Email'],
                $users->map(fn($user) => [
                    $user->id,
                    $user->firstName,
                    $user->lastName,
                    $user->email,
                ])
            );
        }

        $this->newLine();
        $this->info('✅ Affichage terminé !');

        return Command::SUCCESS;
    }
}
