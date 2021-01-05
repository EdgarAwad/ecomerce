@extends('frontEnd.layouts.master')
@section('title','Alltronica')
@section('slider')
@section('content')

<section>

  <div class="jumbotron " style=" background: url('products/small/automatizacion.jpg') top center fixed;
          background-size: cover; padding: 0%; margin: 0%;">
    <div class="container fondo">
      <h1 class="animate__animated animate__backInLeft display-3 " style="color: white;">Automatizacion de procesos</h1>
      <p class="animate__animated animate__backInRight" style="color: white;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate commodi distinctio eveniet culpa tenetur libero nulla dolores, nobis hic, accusantium atque rerum eligendi ipsam exercitationem esse nemo enim suscipit incidunt. .</p>
      <!--  <p><a class="btn btn-primary" href="#" role="button">Nosotros &raquo;</a></p>-->
    </div>
  </div>
</section>
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
      <img src="{{url('products/small/nilogo.jpg')}}" alt="" width="400px">
    </div>
  </div>
</div>

<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">

  <div class="carousel-inner" style=" text-align: center; ">
    <div class="carousel-item active" style="text-align: center;">
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/siemens.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/festo.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/abb.png')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/ni.png')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/electric.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/telemecanique.png')}}" alt="" width="150"></div>

    </div>

    <div class="carousel-item" style="text-align: center;">
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/siemens.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/festo.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/abb.png')}}" alt="" width="150"></div>

      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/ni.png')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/electric.jpg')}}" alt="" width="150"></div>
      <div class=" video col-lg-2 col-md-2 col-sm-6"> <img src="{{url('products/small/telemecanique.png')}}" alt="" width="150"></div>

    </div>

    <!--  <div class="carousel-item" style="text-align: center;" >
       <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
       <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div> -->
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection