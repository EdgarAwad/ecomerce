<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\Products_model;
use Illuminate\Http\Request;

class ingresosController extends Controller
{
    public function index()
    {
        $menu_active=3;
        $categories=Products_model::all();
        return view('backEnd.products.ingreso',compact('menu_active','categories'));
      
    }
}
