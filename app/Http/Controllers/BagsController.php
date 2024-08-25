<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagsController extends Controller
{
    public function home()
    {
        return view("marklybags.bags");
    }
}
