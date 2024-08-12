<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Localidades_prov;

class Localidades_provTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $local=new localidades_prov();
        $local->id_localidad=123;
        $local->descrip_loca="San Antonio Tequendama";
        $local->save();

        $local=new localidades_prov();
        $local->id_localidad=124;
        $local->descrip_loca="Patio Bonito";
        $local->save();

        $local=new localidades_prov();
        $local->id_localidad=125;
        $local->descrip_loca="Socha";
        $local->save();

        $local=new localidades_prov();
        $local->id_localidad=126;
        $local->descrip_loca="Hogares";
        $local->save();

        $local=new localidades_prov();
        $local->id_localidad=127;
        $local->descrip_loca="Indumil";
        $local->save();

    }
}
