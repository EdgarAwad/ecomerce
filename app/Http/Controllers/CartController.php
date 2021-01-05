<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\ProductAtrr_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $contador = Cart_model::count('id');
        $session_id = Session::get('session_id');
        $cart_datas = Cart_model::where('session_id', $session_id)->get();
        $total_price = 0;
        $ivita = 0;
        foreach ($cart_datas as $cart_data) {
            $total_price += $cart_data->price * $cart_data->quantity;
            $ivita = $total_price * 0.19;
        }
        return view('frontEnd.cart', compact('cart_datas', 'total_price', 'ivita', 'contador'));
    }

    public function addToCart(Request $request)
    {

        $inputToCart = $request->all();
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');

        $stockAvailable = DB::table('products')->select('p_color', 'p_code')

            ->where([
                'id' => $inputToCart['products_id'],
                'price' => $inputToCart['price']
            ])->first();
        if ($stockAvailable->p_color >= $inputToCart['quantity']) {
            $inputToCart['user_email'] = 'weshare@gmail.com';
            $session_id = Session::get('session_id');
            if (empty($session_id)) {
                $session_id = str_random(40);
                Session::put('session_id', $session_id);
            }
            $inputToCart['session_id'] = $session_id;


            $inputToCart['product_code'] = $stockAvailable->p_code;
            $count_duplicateItems = Cart_model::where([
                'products_id' => $inputToCart['products_id'],
                'product_color' => $inputToCart['product_color'],
            ])->count();
            if ($count_duplicateItems > 0) {
                return back()->with('message', 'This Item Added already');
            } else {
                Cart_model::create($inputToCart);

                return back()->with('message', 'Agregado al carrito');
            }
        } else {
            return back()->with('message', 'Stock no disponible');
        }
    }
    public function deleteItem($id = null)
    {
        $delete_item = Cart_model::findOrFail($id);
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $delete_item->delete();
        return back()->with('message', 'Producto eliminado!');
    }
    public function updateQuantity($id, $quantity)
    {
        Session::forget('discount_amount_price');
        Session::forget('coupon_code');
        $sku_size = DB::table('cart')->select('product_code', 'product_name', 'quantity')->where('id', $id)->first();
        $stockAvailable = DB::table('products')->select('p_color')->where([
            'p_code' => $sku_size->product_code,
            'p_name' => $sku_size->product_name
        ])->first();
        $updated_quantity = $sku_size->quantity + $quantity;
        if ($stockAvailable->p_color >= $updated_quantity) {
            DB::table('cart')->where('id', $id)->increment('quantity', $quantity);
            return back()->with('message', 'Actualizacion realizada con exito');
        } else {
            return back()->with('message', 'Stock faltante');
        }
    }
}
