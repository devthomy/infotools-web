<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données de test dans la table clients
        for ($i = 0; $i < 10; $i++) { // Ceci va créer 10 clients de test
            DB::table('clients')->insert([
                'last_name' => Str::random(10), // génère un nom aléatoire
                'first_name' => Str::random(10), // génère un prénom aléatoire
                'email' => Str::random(10).'@example.com', // génère un email aléatoire
                'phone' => '123-456-7890', // vous pourriez vouloir générer un numéro de téléphone aléatoire et valide ici
                'address' => Str::random(50), // génère une adresse aléatoire
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
