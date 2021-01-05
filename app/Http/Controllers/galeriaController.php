<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galeriaController extends Controller
{
    public function index()
    {
       
        $menu_active=8;
    
        return view('backEnd.galeria.galeria',compact('menu_active'));
    }
    public function create()
    {
       
        $menu_active=8;
    
        return view('backEnd.galeria.create',compact('menu_active'));
    }
}
