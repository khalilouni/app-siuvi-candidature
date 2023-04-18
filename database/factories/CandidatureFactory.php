<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidature>
 */
class CandidatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "poste" =>    fake()->title(),
            "description" =>    fake()->sentence(),
            "companyName" =>    fake()->company(),
            "datePostulation" =>    now(),
            "dateLimite" =>    fake()->date(),
            "requisPoste" =>    fake()->sentence(),
            "contactCampany" => fake()->phoneNumber(),
            "emailRhCampany" => fake()->safeEmail,
            "captureEcran" => fake()->word(),
        ];
    }
}
