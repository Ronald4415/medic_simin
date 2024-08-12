<?php

namespace App\Http\Controllers;

use App\Models\Localidades_prov;
use Illuminate\Http\Request;

class Localidades_provController extends Controller
{
    
    public function index_loc()
    {
        $locali=Localidades_prov::all();
        //return $locali;
        return view('localidades/index_loca', compact('locali'));
    }

    public function adiciongen()
    {

        //return "LLegue al controlador";
        return view('localidades/adiciongen');
    }


    public function adicion_loc(Request $valores)
    {
        return $valores;
        $localidad=new Localidades_prov();
        $localidad->id_localidad=$valores->identidad;
        $localidad->descrip_loca=$valores->descrip_loc;
        $localidad->save();

        return redirect()->route('localidad');
        
    }
   
}

//$cate=Categorias_Prod::all();
        //return $cate;
        //return view('/categorias/Categorias_Prod',compact('cate'));
 
 

 