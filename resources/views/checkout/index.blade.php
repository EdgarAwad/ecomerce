@extends('frontEnd.layouts.master')
@section('title','checkOut')
@section('slider')

@section('content')
<br>
<br>
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        
     


        <div class="row">
            
            <form action="{{url('/submit-checkout')}}" method="post" class="form-horizontal">
                <div class="col-md-5 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <legend>Facturar a:</legend>
                        <div class="form-group {{$errors->has('billing_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_name" id="billing_name" value="{{$user_login->name}}" placeholder="Nombre">
                            <span class="text-danger">{{$errors->first('billing_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="billing_address" id="billing_address" placeholder="Direccion">
                            <span class="text-danger">{{$errors->first('billing_address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_city" value="{{$user_login->city}}" id="billing_city" placeholder="Ciudad">
                            <span class="text-danger">{{$errors->first('billing_city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_state')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_state" value="{{$user_login->state}}" id="billing_state" placeholder=" Departamento">
                            <span class="text-danger">{{$errors->first('billing_state')}}</span>
                        </div>
                        <div class="form-group">
                            <select name="billing_country" id="billing_country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('billing_pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_pincode" value="{{$user_login->pincode}}" id="billing_pincode" placeholder=" Codigo postal">
                            <span class="text-danger">{{$errors->first('billing_pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_mobile" value="{{$user_login->mobile}}" id="billing_mobile" placeholder="Telefono">
                            <span class="text-danger">{{$errors->first('billing_mobile')}}</span>
                        </div>

                        <span>
                            <input type="checkbox" class="checkbox" name="checkme" id="checkme">Enviar y facturar a los mismos datos
                        </span>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-2">

                </div>
                <div class="col-md-5">
                    <div class="signup-form"><!--sign up form-->
                        <legend>Enviar a:</legend>
                        <div class="form-group {{$errors->has('shipping_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_name" id="shipping_name" value="" placeholder="Nombre">
                            <span class="text-danger">{{$errors->first('shipping_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="" name="shipping_address" id="shipping_address" placeholder="Direccion">
                            <span class="text-danger">{{$errors->first('shipping_address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_city" value="" id="shipping_city" placeholder="Ciudad">
                            <span class="text-danger">{{$errors->first('shipping_city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_state')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_state" value="" id="shipping_state" placeholder="Departamento">
                            <span class="text-danger">{{$errors->first('shipping_state')}}</span>
                        </div>
                        <div class="form-group">
                            <select name="shipping_country" id="shipping_country" class="form-control">
                                @foreach($countries as $country)
                                    <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('shipping_pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_pincode" value="" id="shipping_pincode" placeholder="Codigo postal">
                            <span class="text-danger">{{$errors->first('shipping_pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_mobile" value="" id="shipping_mobile" placeholder="Telefono">
                            <span class="text-danger">{{$errors->first('shipping_mobile')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">CheckOut</button>
                    </div><!--/sign up form-->
                    <div class="container">
    <p style="color:white">ADT Colombia es una empresa colombiana dedicada al desarrollo informatico y electronico ADT Colombia es una empresa colombiana dedicada al desarrollo informatico y electronico</p>
  </div>
                </div>
       
            </form>
            
        </div>
     
    </div>
    
    <div style="margin-bottom: 20px;"></div>
@endsection