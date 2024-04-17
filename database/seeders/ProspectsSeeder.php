<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProspectsSeeder extends Seeder
{
    /**
     * Exécutez les seeds de la base de données.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données factices dans la table prospects
        for ($i = 0; $i < 10; $i++) { // insère 10 prospects factices
            DB::table('prospects')->insert([
                'last_name' => Str::random(10), // génère un nom de famille aléatoire
                'first_name' => Str::random(10), // génère un prénom aléatoire
                'email' => Str::random(10).'@example.com', // génère un email aléatoire
                'phone' => '123-456-'.rand(1000, 9999), // génère un numéro de téléphone aléatoire
                'address' => Str::random(20), // génère une adresse aléatoire
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
