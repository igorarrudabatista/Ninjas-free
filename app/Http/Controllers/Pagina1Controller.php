<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagina1Controller extends Controller
{
    public function index() { 
    return view('/pagina.pagina1');
    }

}
