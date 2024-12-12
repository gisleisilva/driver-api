<?php

namespace Database\Factories;

use App\Models\DriverUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\DriverAddress>
 */
class DriverAddressFactory extends Factory
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
            'cep' => $this->faker->postcode(),
            'endereco' => $this->faker->streetAddress(),
            'numero' => $this->faker->buildingNumber(),
            'complemento' => $this->faker->optional()->word(),
            'bairro' => $this->faker->word(),
            'cidade' => $this->faker->city(),
            'estado' => 'GO',
            'pais' => $this->faker->country(),
            'telefone_residencial' => $this->faker->phoneNumber(),
        ];
    }
}
