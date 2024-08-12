<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\proveedormer>
 */
class ProveedormerFactory extends Factory
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
            'nit_proveed'=>$this->faker->randomElement([1234567,2345678,3456789,4567890,5678901,6789012,7890123,8901234,9012345,1023456,2134567]),
            'nom_provee'=>$this->faker->name(),
            'direccion_prov'=>$this->faker->address(),
            'nro_telef'=>$this->faker->email(),

            'repre_pro'=>$this->faker->name()
        ];
    }
}
