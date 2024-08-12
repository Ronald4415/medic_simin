<?php

namespace App\Http\Controllers;
use App\Models\Categorias_Prod;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriasController extends Controller
{
    //

    public function index_cat()
    {
        $cate=Categorias_Prod::all();
        //return $cate;
        return view('/categorias/Categorias_Prod',compact('cate'));
    }

    public function recibe_cat()
    {
        return view('categorias/recibe_cat');
    }

    public function guardar_datos(Request $valores)
    {
        return $valores;
        $datos=new Categorias_Prod();
        $datos->Descrip_cat=$valores->Descrip_cat;
        //$datos->imagen_cate=$valores->imagen_cate;
        return $datos;
        if($valores->hasFile('imagen_cate'))
        {
            $imagen_cate=$valores->file('imagen_cate');
            $nombre_img=Str::slug($valores->imagen_cate).".".$imagen_cate->guessExtension();
            $ruta=public_path('img/imagenes/');
            //$imagen_cate->move($ruta,$nombre_img);
            copy($imagen_cate->getrealpath(),$ruta.$nombre_img);
            $datos->imagen_cate=$nombre_img; 
        }
        $datos->save();

        return redirect()->route('categorias');


    }




    //***********************************

    public function categorias_add()
    {

        return view('categorias/categorias_add');
    }

    public function modificar_cat()
    {
        return view('/categorias/categorias_add');
    }

   


    public function traer_cat($id)
    {
        $categor=Categorias_Prod::find($id);
        $categ=Categorias_Prod::all();
        //return $categ;
        return view('/categorias/categorias_actualiza', ['categorias'=>$categ,'catego'=>$categor]);




    }

    public function eliminar_cat(CategoriasController $id)
    {
        return $id;
       $id->delete();
       return back()->with('succes', 'Categoria Eliminada Correctamente....');

    }

    public function actualiz_datos(Request $valores)
    {
        //return $valores;
        $cate=Categorias_Prod::find($valores->categoria_id);
        $cate->Descrip_cat=$valores->Descrip_cat;
        $cate->save();

        return redirect()->route('categorias');

    }


}
