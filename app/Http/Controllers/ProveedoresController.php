<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProveedoresController;
use App\Models\Proveedormer;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    //
    public function index_prov()
    {
        $prov=Proveedormer::all();
        return view('/proveedores/index_prov',compact('prov'));
    }

    public function adicion()
    {
        return view('proveedores/adicion_prov');
    }

    public function creapro(Request $campos)
    {
        $prove=new Proveedormer();
        $prove->nit_proveed=$campos->nit;
        $prove->nom_provee=$campos->nombre_prov;
        $prove->direccion_prov=$campos->Dir_prov;
        $prove->nro_telef=$campos->telefo;
        $prove->repre_pro=$campos->represen;
        $prove->save();

        return redirect()->route('proveedor');
    }

    public function editar($id_prov)
    {
        $prove=Proveedormer::find($id_prov);

        //return $prove;

        return view('proveedores/modifi_prov',['prove'=>$prove]);
    }   

}
