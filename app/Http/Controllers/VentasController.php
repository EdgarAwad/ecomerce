<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index()
    {
       
        $menu_active=7;
    
        return view('backEnd.ventas.ventas',compact('menu_active'));
    }
}
