@extends('frontEnd.layouts.master')
@section('title','blog')

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
<div class="container">
  <h2 class="titulo clcaf">Nuestro blog</h2>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">

        @foreach($blogs as $blog)

        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <a href="{{url('/blog-detail',$blog->id)}}"> <img src="{{ url('blog/small/',$blog->imagen) }}" alt="" class="bd-placeholder-img card-img-top" height="160" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
            <title>{{$blog->nombre}}</title>
            <rect width="100%" height="100%" fill="#55595c" />


            <div class="card-body" style="text-align: justify;">
              <h3>{{$blog->nombre}}</h3>
              <p class="card-text" style="text-align: justify;">{!!substr($blog->contenido,0,500)!!}... </p>
              <a href="#">
                <p class="clazo">Leer mas..</p>
              </a>
              <div class="d-flex justify-content-between align-items-center">

                <small class="text-muted">Creado en: {{$blog->created_at}}</small>
              </div>
            </div>
          </div>

        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>
{{$blogs->links()}}

@endsection