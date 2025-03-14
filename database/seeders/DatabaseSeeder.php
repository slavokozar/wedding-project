<?php

namespace Database\Seeders;

use App\Models\Guest;
use App\Models\NutritionalRequirements;
use App\Models\Table;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Guest::reguard();
//
//        User::create([
//            'name' => 'Slavo',
//            'email' => 'slavo.kozar@gmail.com',
//            'password' => bcrypt('secret'),
//        ]);



        for($i = 1; $i <= 10; $i++){
            Table::create([
                'name' => 'Stôl ' . $i
            ]);
        }




        $nutritional_requirements = [
            "Alergia na vajcia",
            "Alergia na ryby",
            "Alergia na mlieko a mliečne výrobky",
            "Intolerancia laktózy",
            "Histaminová intolerancia",
            "Alergia na arašidy",
            "Alergia na mäkkýše",
            "Alergia na sóju",
            "Alergia na orechy",
            "Alergia na huby",
            "Pescatariánstvo",
            "Frutariánstvo",
            "Iné...",
        ];

        NutritionalRequirements::create([
            'name' => "Vegetariánstvo",
            'main' => true
        ]);

        NutritionalRequirements::create([
            'name' => "Vegánstvo",
            'main' => true
        ]);

        NutritionalRequirements::create([
            'name' => "Celiakia",
            'main' => true
        ]);

        foreach($nutritional_requirements as $requirement){
            NutritionalRequirements::create([
                'name' => $requirement,
                'main' => false
            ]);
        }

    }
}
