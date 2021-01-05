<?php

namespace App\Http\Controllers;

use App\Blog_model;
use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use App\Cart_model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $contador = Cart_model::count('id');
        $blogs = Blog_model::orderBy('id', 'DESC')->paginate(4);
        $products = Products_model::orderBy('id', 'DESC')->paginate(6);
        return view('frontEnd.index', compact('products', 'blogs', 'contador'));
    }
    public function contactenos()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.contactenos',compact('contador') );
    }
    public function servicios()
    {   
        $contador = Cart_model::count('id');
        return view('frontEnd.servicios' ,compact('contador'));
    }
    public function blogg()
    {
        $blogs = Blog_model::orderBy('id', 'DESC')->paginate(4);
        $contador = Cart_model::count('id');


        return view('frontEnd.blog', compact('blogs','contador' ));
    }
    public function nosotros()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.nosotros' , compact('contador' ));
    }
    public function servicioAutomatizacion()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.servicio-automatizacion' , compact('contador' ));
    }
    public function servicioDistribucion()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.servicio-distribucion' , compact('contador' ));
    }
    public function servicioConectividad()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.servicio-conectividad' , compact('contador' ));
    }
    public function servicioIntegracion()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.servicio-integracion' , compact('contador' ));
    }
    public function cotizaciones()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.cotizacion' , compact('contador' ));
    }
    public function quejas()
    {
        $contador = Cart_model::count('id');
        return view('frontEnd.quejas' , compact('contador' ));
    }

    public function shop(Request $request)
    {
        $buscar = trim($request->get('search2'));
        $products = Products_model::where('description', 'LIKE', '%' . $buscar . '%')->get();
        $contador = Cart_model::count('id');
        $byCate = "";
        return view('frontEnd.products', compact('products', 'byCate' ,'contador' ));
    }
    public function listByCat($id)
    {
        $contador = Cart_model::count('id');
        $list_product = Products_model::where('categories_id', $id)->get();
        $byCate = Category_model::select('name')->where('id', $id)->first();
        return view('frontEnd.products', compact('list_product', 'byCate' ,'contador' ));
    }
    public function detialpro($id)
    {
        $contador = Cart_model::count('id');
        $detail_product = Products_model::findOrFail($id);
        $imagesGalleries = ImageGallery_model::where('products_id', $id)->get();
        $totalStock = ProductAtrr_model::where('products_id', $id)->sum('stock');
        $relateProducts = Products_model::where([['id', '!=', $id], ['categories_id', $detail_product->categories_id]])->get();

        return view('frontEnd.product_details', compact('detail_product', 'imagesGalleries', 'totalStock', 'relateProducts', 'contador'));
    }
    public function detialblog($id)
    {
        $contador = Cart_model::count('id');
        $detail_blog = Blog_model::findOrFail($id);
        return view('frontEnd.blog-detail', compact('detail_blog' ,'contador'));
    }
    public function getAttrs(Request $request)
    {
        $all_attrs = $request->all();
        //print_r($all_attrs);die();
        $attr = explode('-', $all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select = ProductAtrr_model::where(['products_id' => $attr[0], 'size' => $attr[1]])->first();
        echo $result_select->price . "#" . $result_select->stock;
    }
}
