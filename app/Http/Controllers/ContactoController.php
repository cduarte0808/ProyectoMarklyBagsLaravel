<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function home()
    {
        return view("marklybags.contacto");
    }
}
