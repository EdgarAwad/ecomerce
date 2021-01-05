@extends('frontEnd.layouts.master')
@section('title','Cart Page')
@section('slider')

@section('content')
<br>
<div class="col-sm-12 padding-right">
<h2 class="title text-center" style="
 color:#464342;">Tu compra</h2>
</div>
<div class="container">
        <div class="row">
            <div class="col-sm-9">
    <section id="cart_items">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu bgazo">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Precio</td>
                        <td class="quantity">Cantidad</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($cart_datas as $cart_data)
                            <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                            ?>
                            <tr>
                                <td class="cart_product">
                                    @foreach($image_products as $image_product)
                                        <a href=""><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 100px;"></a>
                                    @endforeach
                                </td>
                                <td class="cart_description">
                                    <p><a href="">{{$cart_data->product_name}}</a></p>
                                    
                                </td>
                                <td class="cart_price">
                                    <p>${{$cart_data->price}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" size="2">
                                        @if($cart_data->quantity>1)
                                            <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"> - </a>
                                        @endif
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">$ {{$cart_data->price*$cart_data->quantity}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete bgblanco clazo" href="{{url('/cart/deleteItem',$cart_data->id)}}"><i class="far fa-trash-alt"></i></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    </div>
    <div class="col-sm-3">
    
   
       
          
              <div >
                    @if(Session::has('message_coupon'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{Session::get('message_coupon')}}
                        </div>
                    @endif
                    <div class="chose_area" style="padding: 20px;">
                        <form action="{{url('/apply-coupon')}}" method="post" role="form">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="Total_amountPrice" value="{{$total_price}}">
                            <h5>CUPON</h5>
                            <div class="form-group">
                               
                                <div class="controls {{$errors->has('coupon_code')?'has-error':''}}">
                                    <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="codigo del cupón">
                                    <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Aplicar cupón</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div >
                    @if(Session::has('message_apply_sucess'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message_apply_sucess')}}
                        </div>
                    @endif
                    <div class="total_area">
                    <H5>TOTAL DE COMPRA</H5>
                        <ul >
                            @if(Session::has('discount_amount_price'))
                                <li>Sub Total <span>$ {{$total_price}}</span></li>
                                <li>Coupon Discount (Code : {{Session::get('coupon_code')}}) <span>$ {{Session::get('discount_amount_price')}}</span></li>
                                <li>Total <span>$ {{$total_price-Session::get('discount_amount_price')}}</span></li>
                            @else
                                <li>IVA: <span>$ {{$ivita}}</span></li>
                                <li>Total <span>$ {{$total_price}}</span></li>
                            @endif
                        </ul>
                     <div class="row">
                        <div style="margin-left: 20px;"><a class="btn btn-primary" href="{{url('/check-out')}}">Check Out</a></div>
                        <div style="margin-left: 20px;"><a class="btn btn-primary" href="{{url('/list-products')}}">Seguir comprando</a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
   
    </div>
  <br>
  <br>
@endsection