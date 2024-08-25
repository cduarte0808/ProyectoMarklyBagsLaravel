<?php

namespace App\Http\Controllers;

use App\Resources\Productos\Manager;
use Illuminate\Http\Request;

class ProductosControllerApi extends Controller
{

    public $manager;

    function __construct() {
        $this->manager= new Manager();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->listarRegistros()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->crearProducto($request)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->buscarProducto($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->actualizarProducto($request,$id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->eliminarProducto($id)
        ]);
    }
}
