<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedormer;
use App\Models\Categorias_Prod;
use App\Models\Clientes_prod;
use App\Models\Localidades_prov;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //
        $this->call([ProveedormerTableSeeder::class]);
        $this->call([Categorias_ProdTableSeeder::class]);
        $this->call([localidades_provTableSeeder::class]);
        
        Proveedormer::factory(50)->create();
        Categorias_Prod::factory(50)->create();
        $this->call([Clientes_prodTableSeeder::class]);
        Clientes_prod::factory(50)->create();
    }
}
