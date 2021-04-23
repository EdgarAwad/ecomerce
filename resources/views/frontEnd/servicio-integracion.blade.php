@extends('frontEnd.layouts.master')
@section('title','servicios')
@section('slider')
@section('content')
<section>

  <div class="jumbotron " style=" background: url('products/small/instalaciones.jpg') top center fixed;
          background-size: cover; padding: 0%; margin: 0%;">
    <div class="container fondo">
      <h1 class="animate__animated animate__backInLeft display-3 " style="color: white;">Integracion electronica</h1>
      <p class="animate__animated animate__backInRight" style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate commodi distinctio eveniet culpa tenetur libero nulla dolores, nobis hic, accusantium atque rerum eligendi ipsam exercitationem esse nemo enim suscipit incidunt. .</p>
      <!--  <p><a class="btn btn-primary" href="#" role="button">Nosotros &raquo;</a></p>-->
    </div>
  </div>
</section>
<section id="portfolio">
  <div class="container wow fadeInUp">
    <div class="row">
      <div class="col-md-12">
        <h3 class="titulo clcaf">Solicita tu cotizacion</h3>
        <br>
        <div class="section-title-divider"></div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/camaras.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>CCTV</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/puertas.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Puertas automaticas</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/alarmas.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Alarmas residenciales</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/cercas .jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Cercas perimetrales o electricas</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/acceso.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Control de acceso y/o de asistencia</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/citofonia.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Citofonica y video porteros</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/vehicular.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Acceso peatonal y vehicular</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

      <div class="col-md-4">
        <a class="portfolio-item" style="background-image: url('products/small/paneles.jpg');" href="{{url('/cotizacion')}}">
          <div class="details">
            <h4>Sistemas fotovoltaicos</h4>
            <span>Alored dono par</span>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>|
@endsection