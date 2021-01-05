<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturasController extends Controller
{
    public function index()
    {
       
        $menu_active=7;
    
        return view('backEnd.ventas.facturas',compact('menu_active'));
    }
}