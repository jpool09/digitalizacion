<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class asociadocontroller extends Controller
{
    public function index(){
        return view('areas.asociado');
    }
}

