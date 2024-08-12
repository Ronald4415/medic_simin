<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias_Prod>
 */
class Categorias_ProdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'Descrip_cat'=>$this->faker->name(),
           'imagen_cate'=>$this->faker->name()        
        ];
    }
}
