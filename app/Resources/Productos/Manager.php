<?php

namespace App\Resources\Productos;

use App\Models\Productos;

class Manager
{
    public function listarRegistros()
    {
        return Productos::all();
    }

    public function buscarProducto($id)
    {
        return Productos::find($id);
    }

    public function eliminarProducto($id)
    {
        $producto = Productos::find($id);
        return $producto->delete();
    }

    public function actualizarProducto($request, $id)
    {
        return Productos::where("id", $id)->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio
        ]);
    }

    public function crearProducto($request)
    {
        return Productos::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio
        ]);
    }
}
