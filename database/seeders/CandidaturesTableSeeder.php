<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            "poste" =>    fake()->title(),
            "description" =>    fake()->paragraph(),
            "companyName" =>    fake()->text(),
            "datePostulation" =>    now(),
            "dateLimite" =>    date(),
            "requisPoste" =>    fake()->text(),
            "contactCampany" => fake()->text(),
            "emailRhCampany" => fake()->safeEmail,
        ]);
    }
}
