@extends('frontEnd.layouts.master')
@section('title','Orden')
@section('slider')
@endsection
@section('content')
<main role="main">

     




    <div class="container">
        <div class="step-one">
            <h2 class="heading">Enviar a:</h2>
        </div>
        <div class="row">
            <form action="{{url('/submit-order')}}" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <input type="hidden" name="users_id" value="{{$shipping_address->users_id}}">
                <input type="hidden" name="users_email" value="{{$shipping_address->users_email}}">
                <input type="hidden" name="name" value="{{$shipping_address->name}}">
                <input type="hidden" name="address" value="{{$shipping_address->address}}">
                <input type="hidden" name="city" value="{{$shipping_address->city}}">
                <input type="hidden" name="state" value="{{$shipping_address->state}}">
                <input type="hidden" name="pincode" value="{{$shipping_address->pincode}}">
                <input type="hidden" name="country" value="{{$shipping_address->country}}">
                <input type="hidden" name="mobile" value="{{$shipping_address->mobile}}">
                <input type="hidden" name="shipping_charges" value="0">
                <input type="hidden" name="order_status" value="success">
                @if(Session::has('discount_amount_price'))
                    <input type="hidden" name="coupon_code" value="{{Session::get('coupon_code')}}">
                    <input type="hidden" name="coupon_amount" value="{{Session::get('discount_amount_price')}}">
                    <input type="hidden" name="grand_total" value="{{$total_price-Session::get('discount_amount_price')}}">
                @else
                    <input type="hidden" name="coupon_code" value="NO Coupon">
                    <input type="hidden" name="coupon_amount" value="0">
                    <input type="hidden" name="grand_total" value="{{$total_price}}">
                @endif

                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th scope="col-2" >Nombre</th>
                                <th scope="col-3">Direccion</th>
                                <th scope="col-2">Ciudad</th>
                                <th scope="col-2">Departamento</th>
                                <th scope="col-2">Pais</th>
                                <th scope="col-2">Codigo postal</th>
                                <th scope="col-2">Telefono</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="font-size: medium;">{{$shipping_address->name}}</td>
                                <td style="font-size: medium;">{{$shipping_address->address}}</td>
                                <td style="font-size: medium;">{{$shipping_address->city}}</td>
                                <td style="font-size: medium;">{{$shipping_address->state}}</td>
                                <td style="font-size: medium;">{{$shipping_address->country}}</td>
                                <td style="font-size: medium;">{{$shipping_address->pincode}}</td>
                                <td style="font-size: medium;">{{$shipping_address->mobile}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>




                    <section id="cart_items">
                        <div class="review-payment">
                            <h2>Compra:</h2>
                        </div>
                        <div class="table-responsive cart_info ">
                            <table class="table table-condensed"
                            >
                                <thead>
                                <tr class="cart_menu ">
                                    <td class="image " style="text-align: center;">Item</td>
                                    <td class="description" style="text-align: center;">descripcion</td>
                                    <td class="price ">Precio</td>
                                    <td class="quantity ">Cantidad</td>
                                    <td class="total ">Total</td>
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
                                    <td class="cart_description" >
                                        <h4><a  href="">{{$cart_data->product_name}} </a></h4>
                                        <p>{{$cart_data->product_code}} | {{$cart_data->size}}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>${{$cart_data->price}}</p>
                                    </td>
                                    <td  style="font-size: medium;">
                                        <h2>{{$cart_data->quantity}}</h2>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">$ {{$cart_data->price*$cart_data->quantity}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">
                                        <table class="table table-condensed total-result">
                                            <tr>
                                                <td>
                                                    Sub Total</td>
                                                <td>$ {{$total_price}}</td>
                                            </tr>
                                            @if(Session::has('discount_amount_price'))
                                                <tr class="shipping-cost">
                                                    <td>Coupon Discount</td>
                                                    <td>$ {{Session::get('discount_amount_price')}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span >$ {{$total_price-Session::get('discount_amount_price')}}</span></td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span style="color:black ;">$ {{$total_price}}</span></td>
                                                </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="container">
                            <div class="row">
                            

                            </div>

                        </div>
                        <div class="payment-options" style="font-size: small;">
                            <span>Selecione metodo de pago: </span>
                        <span>
                            <label><input type="radio" name="payment_method" value="COD" checked><img src="{{ asset('img/pse.png') }}" alt="" style="width: 80px;"></label>
                        </span>
                            <span>
                            <label><input type="radio" name="payment_method" value="COD"><img src="{{ asset('img/efecty.jpg') }}" alt="" style="width: 100px;"> </label>
                        </span>
                            <button type="submit" class="btn btn-primary" style="float: right; width:200px;height:50px; font-size: medium;">Comprar</button>
                        </div>
                    </section>

                </div>
                  <div class="jumbotron" style="background: white;">
  <div class="container">
    <p style="color: white;">ADT Colombia es una empresa colombiana dedicada al desarrollo informatico y electronico</p>
  </div>  
            </form>
          
        </div>
    
</div>   
    </div>
   
    <div style="margin-bottom: 20px;"></div>
@endsection