<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash; // Importez Hash

class EmployersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $roles = ['Manager', 'Salesperson'];

        for ($i = 0; $i < 5; $i++) {
            $password = Hash::make('Thomas2503.'); // Hasher le mot de passe une seule fois

            $employer = Employer::create([
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName,
                'email' => $faker->unique()->safeEmail,
                'password' => $password, // Utiliser le mot de passe hashé
                'role' => $roles[array_rand($roles)],
            ]);

            User::create([
                'name' => $employer->first_name . ' ' . $employer->last_name,
                'email' => $employer->email,
                'password' => $password, // Réutiliser le même mot de passe hashé
            ]);
        }
    }
}
