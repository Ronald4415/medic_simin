<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clientes_prod;

class Clientes_prodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cliente=new clientes_prod();
        $cliente->nit_cli=613459876;
        $cliente->nombres_cli='Bernardo romero pereira';
        $cliente->direccion_cli='calle 45 nro 56 87';
        $cliente->nro_telef='234463557-355767878-3443556656';
        $cliente->correo_ele='bernardo@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459877;
        $cliente->nombres_cli='Juana del Arco Frances';
        $cliente->direccion_cli='cra 75 nro 56 87';
        $cliente->nro_telef='234434557-355789878-34433456656';
        $cliente->correo_ele='Juana@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459878;
        $cliente->nombres_cli='Juan andres sepulveda';
        $cliente->direccion_cli='cra 342 nro 45 27 int 3';
        $cliente->nro_telef='454463557-465767878-4743556656';
        $cliente->correo_ele='JuanAndres@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459877;
        $cliente->nombres_cli='Juana del Arco Frances';
        $cliente->direccion_cli='cra 75 nro 56 87';
        $cliente->nro_telef='234434557-355789878-34433456656';
        $cliente->correo_ele='Juana@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459878;
        $cliente->nombres_cli='Juan andres sepulveda';
        $cliente->direccion_cli="ccra 342 nro 45 27 int 3";
        $cliente->nro_telef='454463557-465767878-4743556656';
        $cliente->correo_ele='JuanAndres@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459879;
        $cliente->nombres_cli='Maria Delfina sepulveda';
        $cliente->direccion_cli="cra 342 nro 45 27 int 3";
        $cliente->nro_telef='454463557-465767878-4743556656';
        $cliente->correo_ele='JuanAndres@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

        $cliente=new clientes_prod();
        $cliente->nit_cli=613459880;
        $cliente->nombres_cli='Jose Eduardo sepulveda';
        $cliente->direccion_cli='cra 342 nro 45 27 int 3';
        $cliente->nro_telef='454463557-465767878-4743556656';
        $cliente->correo_ele='JuanAndres@gmail.com';
        $cliente->foto_cliente="";
        $cliente->save();

    }
}
