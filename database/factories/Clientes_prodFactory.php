<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientes_prod>
 */
class Clientes_prodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nit_cli'=>$this->faker->randomElement([61234345,61234346, 612343467, 61234348, 61234349, 61234360, 61234361, 61234362, 61234363, 61234364, 61234365, 61234366, 61234367, 61234368, 61234369]),
            'nombres_cli'=>$this->faker->name(),
            'direccion_cli'=>$this->faker->address(),
            'nro_telef'=>$this->faker->randomElement([12345678, 901234567,890123456,789012345, 678901234,5678901234]),
            'correo_ele'=>$this->faker->email(),
            'foto_cliente'=>$this->faker->name()
        ];
    }
}
