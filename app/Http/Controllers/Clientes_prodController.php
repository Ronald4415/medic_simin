<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Clientes_prodController;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use App\Models\Clientes_prod;

class Clientes_prodController extends Controller

{
    //

    public function index_clie()
    {
        //return 'llegue al controlador';
        //$cliente=Clientes_prod::all();
        $cliente=Clientes_prod::all();
        //return $cliente;
        return view('clientes/index_client', ['clientes'=>$cliente]);
    }

    public function crea_cli()
    {
        //return 'estoy en el controlador clientes';
        return view('clientes/adic_clien');
    }

     public function crearclien(Request $campos)
    {
        
        $cliente=new clientes_prod();
        $cliente->nit_cli=$campos->nitcli;
        $cliente->nombres_cli=$campos->nombre_cli;
        $cliente->direccion_cli=$campos->direc_cli;
        $cliente->nro_telef=$campos->tel_cli;
        $cliente->correo_ele=$campos->correo_cli;
        $cliente->foto_cliente=$campos->nomb_archi;
        
        if($campos->hasfile('nomb_archi'))
        {
            $nomb_archi=$campos->file('nomb_archi');
            $nombre_img=Str::slug($campos->nomb_archi).".".$nomb_archi->guessExtension();
            //return $nombre_img;
            $ruta=public_path('img/');
            $nomb_archi->move($ruta,$nombre_img);
            //return $nombre_img;
            $cliente->foto_cliente=$ruta.$nombre_img;
            //return $campos->nomb_archi;
            
        }
        $cliente->save();

        return redirect()->route('clientes')->with('Cliente Creado Correctamente....');
    }

    public function editar_dat($id)
    {
        $clien=Clientes_prod::find($id);

        //return $clien;
        $prove=clientes_prod::find($clien);

        return view('clientes/actualiz_clien', ['clien'=>$clien]);
    }

    public function update(Request $request)
    {
        $id=$request->dato;
        //return $request;
        $cliente=Clientes_prod::find($id);
        $cliente->nit_cli=$request->nitcli;
        $cliente->nombres_cli=$request->nombre_cli;
        $cliente->direccion_cli=$request->direc_cli;
        $cliente->nro_telef=$request->tel_cli;
        $cliente->correo_ele=$request->correo_cli;
        $cliente->foto_cliente=$request->nomb_archi;

         if($request->hasfile('nomb_archi'))
        {
            $nomb_archi=$request->file('nomb_archi');
            $nombre_img=Str::slug($request->nomb_archi).".".$nomb_archi->guessExtension();
            //return $nombre_img;
            $ruta=public_path('img/');
            $nomb_archi->move($ruta,$nombre_img);
            //return $nombre_img;
            $cliente->foto_cliente=$ruta.$nombre_img;
            //return $campos->nomb_archi;
            
        }

        $cliente->save();

        return redirect()->route('clientes')->with('Cliente Modificado Correctamente....');
    }

    public function eliminacion($id)
    {
        $cliente=Clientes_prod::find($id);
        $cliente->delete();

        return redirect()->route('clientes')->with('Cliente Eliminado Correctamente...');

    }


}

//https://www.youtube.com/watch?v=gzVebL454G8
