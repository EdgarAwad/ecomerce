@extends('frontEnd.layouts.master')
@section('title','Detalles')
@section('slider')
@endsection
@section('content')

<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark" style="height: auto;">
  <div class="container">
    <div class="row">
      <div class="col-md-3" style="text-align: center;">
        <img src="{{ asset('img/all.png') }}" alt="" width="150px">
      </div>
      <div class="col-md-9 ">
        <h3 class="display-4 font-italic">"Si algo es lo suficientemente importante, deberías intentarlo. Incluso si el resultado probable es el fracaso."</h3>
        <p class="lead my-3">ELON MUSK.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">cofundador de paypal, space x y tesla.</a></p>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="col-md-12" style="text-align: center;">
<h3 class="titulo clcaf">{{$detail_blog->nombre}}</h3>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-7" style="display:flex;align-items:center;">
      <p class="parrafos" style="margin: 0px 40px; ">
        {{$detail_blog->contenido}}
      </p>
    </div>
    <div class="col-sm-5">
    <img src="{{ url('blog/small/',$detail_blog->imagen) }}" alt="" class="bd-placeholder-img card-img-top"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
    </div>
  </div>
</div>
<br>
@endsection