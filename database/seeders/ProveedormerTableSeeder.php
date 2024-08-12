<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Proveedormer;

class ProveedormerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $proveedor=new Proveedormer();
        $proveedor->nit_proveed="604563456";
        $proveedor->nom_provee="Bayer de Colombia S.A.";
        $proveedor->direccion_prov="Av americas 56 67";
        $proveedor->nro_telef="23446566,34456676";
        $proveedor->repre_pro="Jose Eustacio Rivera";
        $proveedor->save();

        $proveedor=new Proveedormer();
        $proveedor->nit_proveed="604563457";
        $proveedor->nom_provee="Glaxo de Colombia S.A.";
        $proveedor->direccion_prov="Av americas 65 67";
        $proveedor->nro_telef="23446577,34456566";
        $proveedor->repre_pro="JBernardo Romero P";
        $proveedor->save();

        $proveedor=new Proveedormer();
        $proveedor->nit_proveed="60456348";
        $proveedor->nom_provee="Squib de Colombia S.A.";
        $proveedor->direccion_prov="Av Primera 18 67";
        $proveedor->nro_telef="2343455,32346566";
        $proveedor->repre_pro="Simon Bolivar";
        $proveedor->save();

        $proveedor=new Proveedormer();
        $proveedor->nit_proveed="604563459";
        $proveedor->nom_provee="Lafranol de Colombia S.A.";
        $proveedor->direccion_prov="Av americas 45 67";
        $proveedor->nro_telef="23446456,34456874";
        $proveedor->repre_pro="Efrain Gonzalez";
        $proveedor->save();

        $proveedor=new Proveedormer();
        $proveedor->nit_proveed="604563460";
        $proveedor->nom_provee="Colombia de Drogas S.A.";
        $proveedor->direccion_prov="Av americas 85 67";
        $proveedor->nro_telef="25676577,34678566";
        $proveedor->repre_pro="Alvaro Echandia B";
        $proveedor->save();
    }
}
