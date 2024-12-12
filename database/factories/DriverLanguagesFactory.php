<?php

namespace Database\Factories;

use App\Models\DriverUser;
use App\Models\Languages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DriverLanguage>
 */
class DriverLanguagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_user_id' => DriverUser::latest()->first()->id,
            'languages_id'  => Languages::inRandomOrder()->first()->id,
            'fluencia' => $this->faker->randomElement(['F', 'I', 'B', 'N']),
        ];
    }
}
