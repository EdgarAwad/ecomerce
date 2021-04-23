@extends('frontEnd.layouts.master')
@section('title','servicios')
@section('slider')
@section('content')
<section>

  <div class="jumbotron " style=" background: url('products/small/conectividad.jpg') top center fixed;
          background-size: cover; padding: 0%; margin: 0%;">
    <div class="container fondo">
      <h1 class="animate__animated animate__backInLeft display-3 " style="color: white;">Conectividad</h1>
      <p class="animate__animated animate__backInRight" style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate commodi distinctio eveniet culpa tenetur libero nulla dolores, nobis hic, accusantium atque rerum eligendi ipsam exercitationem esse nemo enim suscipit incidunt. .</p>
      <!--  <p><a class="btn btn-primary" href="#" role="button">Nosotros &raquo;</a></p>-->
    </div>
  </div>
</section>
<br>
<br>
<h3 class="titulo clcaf">Redes informaticas locales y empresariales</h3>
<br>
<div class="container">

  <div class="row">

    <div class="col-sm-7" style="display:flex;align-items:center;">
      <p class="parrafos" style="margin: 0px 40px; ">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sequi ullam nulla repellat, cupiditate sed et expedita dignissimos deleniti autem quod omnis itaque quis ea similique asperiores provident beatae harum?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam distinctio vero maiores culpa totam quam non voluptates eum impedit recusandae deserunt inventore delectus molestiae corporis, minus, a tempora consequatur omnis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum quia eius fugit eaque iusto dolores dolorem quam, recusandae temporibus consequatur ut, assumenda sequi perferendis rerum nemo incidunt, quos expedita.
      </p>
    </div>
    <div class="col-sm-5">
      <img src="{{url('products/small/redes.jpg')}}" alt="" width="400px">
    </div>
  </div>
</div>
<br>
<h3 class="titulo clcaf">Redes de larga distancia</h3>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <img src="{{url('products/small/antena2.jpg')}}" alt="" width="400px">
    </div>

    <div class="col-sm-7" style="display:flex;align-items:center;">

      <p class="parrafos" style="margin: 0px 40px; ">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sequi ullam nulla repellat, cupiditate sed et expedita dignissimos deleniti autem quod omnis itaque quis ea similique asperiores provident beatae harum?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam distinctio vero maiores culpa totam quam non voluptates eum impedit recusandae deserunt inventore delectus molestiae corporis, minus, a tempora consequatur omnis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum quia eius fugit eaque iusto dolores dolorem quam, recusandae temporibus consequatur ut, assumenda sequi perferendis rerum nemo incidunt, quos expedita.
      </p>
    </div>

  </div>
</div>
<br>

<h3 class="titulo clcaf">Instalacion y administracion de servidores</h3>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-7" style="display:flex;align-items:center;">
      <p class="parrafos" style="margin: 0px 40px; ">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sequi ullam nulla repellat, cupiditate sed et expedita dignissimos deleniti autem quod omnis itaque quis ea similique asperiores provident beatae harum?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam distinctio vero maiores culpa totam quam non voluptates eum impedit recusandae deserunt inventore delectus molestiae corporis, minus, a tempora consequatur omnis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente eum quia eius fugit eaque iusto dolores dolorem quam, recusandae temporibus consequatur ut, assumenda sequi perferendis rerum nemo incidunt, quos expedita.
      </p>
    </div>
    <div class="col-sm-5">
      <img src="{{url('products/small/servidores.jpg')}}" alt="" width="400px">
    </div>
  </div>
</div>
<br>
@endsection