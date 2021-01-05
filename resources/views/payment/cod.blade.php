@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">TU PEDIDO HA SIDO RECIBIDO</h3>
        <p class="text-center">Gracias por comprar con nosotros</p>
        <p class="text-center">Te contactaremos al correo:(<b>{{$user_order->users_email}}</b>) o telefono: (<b>{{$user_order->mobile}}</b>) para cordinar tiempos de entrega.</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection