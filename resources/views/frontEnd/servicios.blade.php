@extends('frontEnd.layouts.master')
@section('title','servicios')
@section('slider')
@section('content')

<div class="gallery">
    <div class="text-center">
      <h2>Gallery</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident </p>
    </div>
    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/8.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/9.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/9.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
    </div>

    <div class="container">
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/10.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/11.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="effect-marley">
          <img src="{{ asset('img/12.jpg') }}" alt="" class="img-responsive" />
          <figcaption>
            <h4>sweet marley</h4>
            <p>Marley tried to convince her but she was not interested.</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>

<br>
<br>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <br>
    <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->
    <br>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
    
    <div class="carousel-inner"  style="background: #90AFC5;; text-align: center; ">
      <div class="carousel-item active"  style="text-align: center;">
      <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
      <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>

      <div class="carousel-item" style="text-align: center;">
    <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
    <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
    <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>

      <div class="carousel-item" style="text-align: center;" >
    <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>       
    <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <iframe  class=" video col-lg-4" width="450" height="315" src="https://www.youtube.com/embed/QlF4rhAbwyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" >
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

@endsection