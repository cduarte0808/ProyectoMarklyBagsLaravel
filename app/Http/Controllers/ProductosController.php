<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Resources\Productos\Manager;


class ProductosController extends Controller
{

    protected $manager;

    function __construct(){
        $this->manager = new Manager();
    }

    public function create()
    {
        return view("productos.create");
    }

    public function store(Request $request)
    {
        if ($this->manager->crearProducto($request)) {
            Alert::success("Se creó exitósamente el Producto");
            return redirect()->route("productos.index");
        } else {
            Alert::error("No se pudo crear el Producto");
            return redirect()->back();
        }
        
    }

    public function index()
    {   
        return view("productos.index") 
        ->with("productos", $this->manager->listarRegistros());
    }

    public function update(Request $request, $id) {

        if ($this->manager->actualizarProducto($request, $id)) {
            Alert::success("Se actualizó correctamente el registro");
            return redirect()->route("productos.index");
        } else {
            Alert::error("No se pudo actualizar el registro");
            return redirect()->back();
        }
        
    }

    public function edit($id) {
        
            return view("productos.edit")
                ->with("producto", $this->manager->buscarProducto($id));
    }    

    public function delete($id) {
        
        if($this->manager->eliminarProducto($id)){
            Alert::success("El registro fue eliminado exitósamente");
            return redirect()->route("productos.index");
        }else{
            Alert::error("El registro no pudo ser eliminado");
            return redirect()->back();
        }

    } 
}
