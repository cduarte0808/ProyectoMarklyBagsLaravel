<?php

namespace App\Resources\Contactos;

use App\Models\Contactos;

class Manager
{

    public function crearContacto($request)
    {
        return Contactos::create([
            'nombre_completo' => $request->nombre_completo,
            'correo_electronico' => $request->correo_electronico,
            'numero_contacto' => $request->numero_contacto,
            'asunto' => $request->asunto,
            'mensaje' => $request->mensaje
        ]);
    }

    public function listarRegistros()
    {
        return Contactos::all();
    }
}
