<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données de test dans la table orders
        for ($i = 0; $i < 10; $i++) { // Ceci va créer 10 commandes de test
            DB::table('orders')->insert([
                'client_id' => rand(1, 10), // supposons que vous ayez des IDs de clients de 1 à 10
                'product_id' => rand(1, 10), // supposons que vous ayez des IDs de produits de 1 à 10
                'quantity' => rand(1, 100), // génère une quantité aléatoire
                'date' => Carbon::today()->subDays(rand(0, 365)), // génère une date aléatoire dans l'année passée
                'amount' => rand(100, 10000) / 100, // génère un montant aléatoire
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
