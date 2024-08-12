<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorias_Prod;

class Categorias_ProdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catego=new Categorias_Prod();
        $catego->Descrip_cat="Medicamentos";
        $catego->imagen_cate="prueba de imagen esperando";
        $catego->save();

        $catego=new Categorias_Prod();
        $catego->Descrip_cat="Suministros";
        $catego->imagen_cate="prueba de imagen esperando";
        $catego->save();

        $catego=new Categorias_Prod();
        $catego->Descrip_cat="Radiologicos";
        $catego->imagen_cate="prueba de imagen esperando";
        $catego->save();

        $catego=new Categorias_Prod();
        $catego->Descrip_cat="Ortopedicos";
        $catego->imagen_cate="prueba de imagen esperando";
        $catego->save();

        $catego=new Categorias_Prod();
        $catego->Descrip_cat="Activos Fijos";
        $catego->imagen_cate="prueba de imagen esperando";
        $catego->save();
    }
}
