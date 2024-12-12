<?php

namespace Database\Factories;

use App\Models\DriverUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\DriverChildren>
 */
class DriverChildrenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'driver_user_id' => DriverUser::latest()->first()->id, // Cria um usuário automaticamente
            'nome_filho' => $this->faker->firstName(),
            'idade_filho' => $this->faker->numberBetween(0, 18),
        ];
    }
}
