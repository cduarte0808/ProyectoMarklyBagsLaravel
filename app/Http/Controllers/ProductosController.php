<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function create()
    {
        return view("productos.create");
    }

    public function store(Request $request)
    {


       /*$producto =  DB::table('productos')->insert([
            'nombre' => $request->nombre, 
            'descripcion' => $request->descripcion
        ]);
        dd($producto);*/
        /**
         * @var  ESTA ES UNA CREACIÓN CON ELOQUENT ORM
         */
        $producto = Productos::create([
            'nombre' => $request->nombre, 
            'descripcion' => $request->descripcion
        ]);   

        dd($producto);     
    }
}
