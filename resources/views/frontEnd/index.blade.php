@extends('frontEnd.layouts.master')
@section('title','Alltronica')
@section('slider')
@section('content')

<div class="headerv contentv">
  <div class="headerv-videov">
    <video id="videoBG" poster="poster.JPG" autoplay muted loop>
      <source src="{{ asset('img/video.mp4') }}" type="video/mp4">
    </video>
  </div>
  <div class="headerv-overlayv"></div>
  <div class="headerv-contentv">
    <a href="#" class="wow animate__animated animate__pulse animate__infinite hvr-pulse-grow"><img src="{{ asset('img/blanco.png') }}" alt="" width="350px"> </a>
    <p style="margin: 0px;">Empresa Colombiana en busca del desarrollo, integración y mejora continua de la tecnología del país.</p>
    <a href="{{ url('/nosotros') }}" class="btn btn-primary">Nosotros</a>

  </div>
</div>
<br>

<h2 class="titulo clcaf">Nuestros servicios</h2>
<br>

<div class="container marketing" style="width: 100%;">


  <div class="row">
    <div class="wow animate__animated animate__bounceInUp col-lg-3" style="text-align: center;">
      <img src="{{ asset('img/automatizacion.png') }}" alt="" class="bd-placeholder-img rounded-circle" width="200" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
      <title>Automatización</title>
      <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      <h2>Automatización</h2>
      <p class="parrafos">Optimiza tus procesos e incrementa tus ganancias integrando autómatas y microcontroladores.</p>
      <p><a class="btn btn-primary" href="{{url('/servicio-automatizacion')}}" role="button">Saber más... &raquo;</a></p>
    </div>
    <div class=" wow animate__animated animate__bounceInUp col-lg-3" style="text-align: center;">
      <img src="{{ asset('img/distribucion.png') }}" alt="" class="bd-placeholder-img rounded-circle" width="200" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
      <title>Automatización</title>
      <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      <h2>Distribucion tecnologica</h2>
      <p class="parrafos">Venta y distribución de componentes electrónicos.</p>
      <p><a class="btn btn-primary" href="{{url('/servicio-distribucion')}}" role="button">Saber más... &raquo;</a></p>
    </div>
    <div class=" wow animate__animated animate__bounceInUp col-lg-3" style="text-align: center;">
      <img src="{{ asset('img/teleco.png') }}" alt="" class="bd-placeholder-img rounded-circle" width="200" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
      <title>Automatización</title>
      <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      <h2>Conectividad</style>
      </h2>
      <p class="parrafos">Venta e instalación de equipos de radiofrecuencia.</p>
      <p><a class="btn btn-primary" href="{{url('/servicio-conectividad')}}" role="button">Saber más... &raquo;</a></p>
    </div>
    <div class="wow animate__animated animate__bounceInUp col-lg-3" style="text-align: center;">
      <img src="{{ asset('img/ingenieria.png') }}" alt="" class="bd-placeholder-img rounded-circle" width="200" height="200" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
      <title>Automatización</title>
      <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text></img>
      <h2>Integración electronica</h2>
      <p class="parrafos">Venta e instalación de equipos electrónicos.</p>
      <p><a class="btn btn-primary" href="{{url('/servicio-integracion')}}" role="button">Saber más... &raquo;</a></p>
    </div>
  </div>
</div>
<!--fin de ser5vicio-->

<br>

<section>

  <div class="jumbotron " style=" background: url('products/small/nilargo.png') top center fixed;
    background-size: cover; padding: 0%;
  margin: 0%;">
    <div class="container fondo" style="text-align: center;">

      <p class="animate__animated animate__backInRight" style="color: white; font-size:50px">Personal certificado como desarrolladores de National Instruments</p>
      <p><a class="btn btn-primary" href="{{url('/servicio-automatizacion')}}" role="button">Automatizacion &raquo;</a></p>
    </div>
  </div>
</section>

<br>
<!--
   slider mientras se define
   <div id="myCarousel" class="wow animate__animated animate__bounceIn carousel slide" data-ride="carousel" style="text-align: center;">
    
    <div class="carousel-inner" >
      <div class="carousel-item active"  style="text-align: center; background: url('img/verde.png') ">
      <h5 class="textocarrusel fuentegrande">Second slide label</h5>
        <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ratione amet nostrum suscipit doloremque laborum repellat quo tempora reprehenderit quia eius aliquam nam, quae, unde commodi. Quasi labore nisi velit.</p>
      </div>

      <div class="carousel-item" style=" background: url('img/azul.png')">
      <h5 class="textocarrusel fuentegrande">Second slide label</h5>
        <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi facere quod asperiores consequuntur a velit molestias reprehenderit ratione in, eligendi nobis fugit provident placeat accusamus temporibus reiciendis sint nostrum.</p>
      </div>

      <div class="carousel-item" style="text-align: center;  background: url('img/amarillo.png')" >
      <h5 class="textocarrusel fuentegrande">Second slide label</h5>
        <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorum placeat eius ab aliquam ratione? Ab recusandae labore, sed odio natus ex voluptas doloribus corporis aperiam ullam, distinctio earum a.</p>
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
    
        -->

<br>
<br>















<!--
   inicio de card
    <div class="wow animate__animated animate__bounceIn col-md-10" style=" margin: 0% 5% 0% 5%;">
   <div class="card mb-3" >
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('img/gria.jpg') }}" class="card-img" alt="..." width="100" height="200" >
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  </div>
  fin de card-->
<br>
<h2 class="titulo clcaf">Ultimos proyectos</h2>
<br>
<div class="row mb-3">
  <div class="col-md-4">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary">Automatizacion</strong>
        <h3 class="mb-0">Proyecto 1</h3>
        <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Seguir leyendo</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
        </svg>

      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Conectividad</strong>
        <h3 class="mb-0">Proyecto 2</h3>
        <div class="mb-1 text-muted">Nov 11</div>
        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Seguir leyendo</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
        </svg>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-success">Conectividad</strong>
        <h3 class="mb-0">Proyecto 3</h3>
        <div class="mb-1 text-muted">Nov 11</div>
        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="stretched-link">Seguir leyendo</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
        </svg>
      </div>
    </div>
  </div>
</div>
<br>


<h2 class="titulo clcaf">Nuestro blog</h2>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">

      @foreach($blogs as $blog)

      <div class="col-lg-3 col-md-6 col-6">
        <div class="card mb-4 shadow-sm">
          <a href="{{url('/blog-detail',$blog->id)}}"> <img src="{{ url('blog/small/',$blog->imagen) }}" alt="" class="bd-placeholder-img card-img-top" height="160" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></a>
          <title>{{$blog->nombre}}</title>
          <rect width="100%" height="100%" fill="#55595c" />


          <div class="card-body" style="text-align: justify;">
            <h3>{{$blog->nombre}}</h3>
            <p class="card-text" style="text-decoration: none;">{!!substr($blog->contenido,0,300)!!}... </p>
            <a href="{{url('/blog-detail',$blog->id)}}">
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

<br>
<div class="wow animate__animated animate__pulse container">
  <div class="row">
    <div class="col-sm-3">

    </div>

    <div class="col-sm-12 padding-right">

      <div class="  features_items">
        <!--features_items-->
        <h2 class="titulo clcaf">Componentes electronicos</h2>

        <div id="myCarousel" class="wow animate__animated animate__pulse carousel slide" data-ride="carousel" style="text-align: center;">

          <div class="carousel-inner">
            <div class="carousel-item active" style="text-align: center; background: url('img/verde.png') ">
              <h5 class="textocarrusel fuentegrande">Second slide label</h5>
              <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ratione amet nostrum suscipit doloremque laborum repellat quo tempora reprehenderit quia eius aliquam nam, quae, unde commodi. Quasi labore nisi velit.</p>
            </div>

            <div class="carousel-item" style=" background: url('img/azul.png')">
              <h5 class="textocarrusel fuentegrande">Second slide label</h5>
              <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae animi facere quod asperiores consequuntur a velit molestias reprehenderit ratione in, eligendi nobis fugit provident placeat accusamus temporibus reiciendis sint nostrum.</p>
            </div>

            <div class="carousel-item" style="text-align: center;  background: url('img/amarillo.png')">
              <h5 class="textocarrusel fuentegrande">Second slide label</h5>
              <p class="textocarrusel funetemedia">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dolorum placeat eius ab aliquam ratione? Ab recusandae labore, sed odio natus ex voluptas doloribus corporis aperiam ullam, distinctio earum a.</p>
            </div>
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <h2 class="titulo clcaf">Ultimos productos</h2>
        <br>
        @foreach($products as $product)
        @if($product->category->status==1)
        <div class="cajaproducto col-lg-2 col-md-6 col-5 hvr-wobble-horizontal" style="height: 350px;">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <div style="text-align: left;color:white">
                  <h5 class="col-sm-6 col-6 bgrojo">NUEVO</h5>
                </div>
                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                <h2 class="clazo"> {{$product->p_name}}
                  <h2>


                    <p style="color: #5d615e;font-size:10px;text-align:justify">{!!substr($product->description,0,150)!!}...</p>
                    <p class="clcaf" style="font-size:15px; font-weight: 700;">${{$product->price}}</p>
                    <p style="color: green;">{{$product->p_color}} Disponibles</p>
                    <a href="{{url('/product-detail',$product->id)}}" class="clazo"><i class="far fa-eye"></i></a>
              </div>
            </div>

          </div>
        </div>

        @endif
        @endforeach
      </div>
      <!--features_items-->

    </div>
  </div>
  <br>
  <section id="portfolio" style="padding: 0px;">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-lg-12 col-sm-6">

          <div class="section-title-divider"></div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3 col-6">
          <a class="portfolio-item" style="background-image: url('products/small/envioGratis.png');" href="{{url('/cotizacion')}}">
            <div class="details">
              <h4>Envio GRATIS!!</h4>
              <span>Por compras superiores a 200 mil pesos</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-6">
          <a class="portfolio-item" style="background-image: url('products/small/segura.png');" href="">
            <div class="details">
              <h4>Compra segura</h4>
              <span>Todos nuestros medios de pago se encuentran verificados</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-6">
          <a class="portfolio-item" style="background-image: url('products/small/mediospago.png');" href="">
            <div class="details">
              <h4>Multiples medios de pago</h4>
              <span>Escoge el medio de pago que se te facilite mas</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-3 col-6">
          <a class="portfolio-item" style="background-image: url('products/small/soporte.png');" href="">
            <div class="details">
              <h4>Atencion al cliente</h4>
              <span>Nuestras lineas de atencion se encuentran abiertas para resolver todas tus dudas.</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>|

</div>


<script src="https://wowjs.uk/dist/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</section>
@endsection