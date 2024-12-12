<?php

namespace Database\Factories;

use App\Models\DriverUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App\Models\DriverDocuments>
 */
class DriverDocumentsFactory extends Factory
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
            'nacionalidade' => $this->faker->country(),
            'naturalidade' => $this->faker->city(),
            'nome_mae' => $this->faker->name(),
            'nome_pai' => $this->faker->name(),
            'quantidade_filhos' => $this->faker->numberBetween(0, 5),
            'estado_civil' => $this->faker->randomElement(['S', 'C', 'D', 'V', 'O']),
            'escolaridade' => $this->faker->randomElement(['E', 'S', 'P', 'M', 'D']),
            'orgao_emissor_rne' => $this->faker->word(),
            'data_emissao_rne' => $this->faker->date(),
            'data_validade_rne' => $this->faker->date(),
            'numero_passaporte' => $this->faker->numerify('##########'),
            'pais_emissor_passaporte' => $this->faker->country(),
            'numero_rg' => $this->faker->numerify('##########'),
            'estado_emissor_rg' => $this->faker->stateAbbr(),
            'data_emissao_rg' => $this->faker->date(),
            'carteira_trabalho' => $this->faker->numerify('##########'),
            'numero_serie_ctps' => $this->faker->numerify('###########'),
            'pis_pasep' => $this->faker->numerify('###########'),
            'titulo_eleitor' => $this->faker->numerify('###########'),
            'secao_eleitoral' => $this->faker->numerify('###'),
            'zona_eleitoral' => $this->faker->numerify('###'),
            'certificado_reservista' => $this->faker->word(),
            'numero_cnh' => $this->faker->numerify('###########'),
            'categoria_habilitacao' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E']),
            'data_emissao_cnh' => $this->faker->date(),
            'data_validade_cnh' => $this->faker->date(),
            'data_primeira_cnh' => $this->faker->date(),
        ];
    }
}
