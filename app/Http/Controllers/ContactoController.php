<?php

namespace App\Http\Controllers;

use App\Resources\Contactos\Manager;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactoController extends Controller
{
    protected $manager;

    function __construct(){
        $this->manager = new Manager();
    }
    public function home()
    {
        return view("marklybags.contacto");
    }

    public function store(Request $request)
    {
        if ($this->manager->crearContacto($request)) {
            Alert::success("Se creó exitósamente el Contacto");
            return redirect()->route("marklybags.contacto");
        } else {
            Alert::error("No se pudo crear el Contacto");
            return redirect()->back();
        }
        
    }

    public function index()
    {   
        return view("marklybags.indexContactos") 
        ->with("contactos", $this->manager->listarRegistros());
    }
}
