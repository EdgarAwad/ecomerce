<?php

namespace App\Http\Controllers;

use App\Blog_model;
use Illuminate\Http\Request;
use App\Http\Controllers\blog;
use Illuminate\Support\Facades\Storage;
use Image;
class BlogController extends Controller
{
    public function index()
    {

        $menu_active = 6;
        $blog = Blog_model::orderBy('id', 'desc')->get();
        return view('backEnd.blog.create', compact('menu_active', 'blog'));
    }
    public function create()
    {
        $menu_active = 6;
        return view('backEnd.blog.index', compact('menu_active'));
    }
    public function store(Request $request)
    {

        $formInput = $request->all();
        
            $imagen = $request->file('imagen');

            $fileName = time() . '-' . str_slug($formInput['nombre'], "-") . '.' . $imagen->getClientOriginalExtension();
            $large_image_path = public_path('blog/large/' . $fileName);
            $medium_image_path = public_path('blog/medium/' . $fileName);
            $small_image_path = public_path('blog/small/' . $fileName);
            //Resize Image
            Image::make($imagen)->save($large_image_path);
            Image::make($imagen)->resize(600, 600)->save($medium_image_path);
            Image::make($imagen)->resize(300, 300)->save($small_image_path);
            $formInput['imagen'] = $fileName;
        
        Blog_model::create($formInput);
        return redirect()->route('blog.create')->with('message', 'Producto agregado!');
    }
    public function show($id)
    {
    }
    public function edit($id)
    {
        $menu_active = 6;
        
        $edit_blog = Blog_model::findOrFail($id);
       
        return view('backEnd.blog.edit', compact('edit_blog', 'menu_active'));
    }

    public function update(Request $request, $id)
    {
        $update_product = Blog_model::findOrFail($id);
    
        $formInput = $request->all();
        
            if ($request->file('imagen')) {
                $imagen = $request->file('imagen');
              
                $fileName = time() . '-' . str_slug($formInput['nombre'], "-") . '.' . $imagen->getClientOriginalExtension();
                $large_image_path = public_path('blog/large/' . $fileName);
                $medium_image_path = public_path('blog/medium/' . $fileName);
                $small_image_path = public_path('blog/small/' . $fileName);
                //Resize Image
                Image::make($imagen)->save($large_image_path);
                Image::make($imagen)->resize(600, 600)->save($medium_image_path);
                Image::make($imagen)->resize(300, 300)->save($small_image_path);
                $formInput['imagen'] = $fileName;
                
            }
       
        $update_product->update($formInput);
        return redirect()->route('blog.index')->with('message', 'Update Products Successfully!');
    }

}
