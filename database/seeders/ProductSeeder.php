<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer un nombre spécifique de produits dans la base de données
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => 'Produit ' . Str::random(10), // Génère un nom de produit aléatoire
                'description' => 'Description pour le produit ' . $i, // Génère une description simple
                'price' => rand(100, 1000), // Génère un prix aléatoire
                'stock' => rand(10, 100), // Génère une quantité de stock aléatoire
            ]);
        }
    }
}
