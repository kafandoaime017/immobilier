<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Annonce;
use Faker\Factory as Faker;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Annonce::create([
                'titre' => $faker->sentence,
                'image' => $faker->imageUrl,
                'description' => $faker->paragraph,
                'localisation' => $faker->address,
                'nbreChambres' => $faker->numberBetween(1, 4),
                'nbreBains' => $faker->numberBetween(1, 3),
                'surface' => $faker->numberBetween(50, 200),
                'prix' => $faker->numberBetween(50000, 300000),
                'id_categorie' => $faker->numberBetween(1, 2), // Remplacez ceci par l'ID de la catégorie réelle
                'id_user' => $faker->numberBetween(1, 3), // Remplacez ceci par l'ID de l'utilisateur réel
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
