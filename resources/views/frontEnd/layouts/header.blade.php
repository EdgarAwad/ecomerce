<br>
<br>
<br>
<br>
<br>
<header id="header">
  <!--header-->
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark " style="margin: 0%; ">
    <div class="container text-center" style="font-size:12px;">


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent1">

        <ul class="navbar-nav mr-auto">


          <li class="nav-item active">
            <a class="nav-link " style="margin: 0px 2px;">
              <form action="{{url('/list-products')}}" method="get" enctype="multipart/form-data">
                {{csrf_field() }}


                <div class="input-group input-group-lg " style="text-align: center;">
                  <input style="width: 500px;" class="form-control" type="text" name="search2" id="busdescripcion" value="" placeholder="  Buscar...">
                  <div class="input-group-append">
                    <button class="btn btn-dark " type="submit" value="Buscar"><i class="fas fa-search "></i></button>

                  </div>

                </div>
              </form>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto  ">

          <li class="nav-item mr-lg-3 space_login">
 <!--CON EL CONTADOR <a class="btn btn-ingreso  " href="{{url('/viewcart')}}" style="font-size: 15px;  color:white;"><span class="contador" style="background: #710000; color:white; display:flex;align-items:center; font-weight: 500;font-size: 12px;">{{$contador}}</span><i class="fa fa-shopping-cart" style="margin: 2px;"></i> </a> -->
            <a class="btn btn-ingreso  " href="{{url('/viewcart')}}" style="font-size: 15px;  color:white;"><i class="fa fa-shopping-cart" style="margin: 2px;"></i> </a>
          </li>

          @if(Auth::check())
          <li class="nav-item mr-lg-3 space_login">
            <a class="btn btn-ingreso  " href="{{url('/myaccount')}}" style="font-size: 15px; color: white;"><i class="fa fa-user"></i> Mi cuenta</a>
          </li>
          <li class="nav-item mr-lg-3 space_login">
            <a class="btn btn-ingreso " href="{{ url('/logout') }}" style="font-size: 15px; color: white;"><i class="fa fa-lock" style="font-size: 15px;"></i> Salir </a>
          </li>
          @else
          <li class="nav-item mr-lg-3 space_login">
            <a class="btn btn-ingreso" href="{{url('/login_page')}}" style="font-size: 15px; color: white;"> Iniciar sesión<noscript></noscript></a>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>



  <nav class="navbar  navbar-expand-lg navbar-light bg-custom fixed-top linea" style="margin: 0%; background: rgba(251, 251, 251, 0.74);">
    <div class="container text-center" style="font-size:12px;">
      <div style="margin:0px 30px 0px 0px"> <a href="{{ url('/') }}"> <img src="{{ asset('img/Banner.png') }}" alt="" width="250px"></div></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right;">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">

            <a class="nav-link menusito clazo hvr-radial-out" href="{{ url('/') }}"> INICIO</a>


          </li>
          <li class="nav-item active">

            <a class="nav-link menusito clazo hvr-radial-out" href="{{ url('/nosotros') }}"> NOSOTROS</a>


          </li>
          <li class="nav-item active">


            <a class="nav-link menusito hvr-radial-out" href="{{url('/list-products')}}">PRODUCTOS</a>

          </li>



          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle menusito hvr-radial-out" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICIOS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item " href="{{url('/servicio-automatizacion')}}">Automatizacion</a>
              <a class="dropdown-item" href="{{url('/list-products')}}">Componentes electronicos</a>
              <a class="dropdown-item" href="{{url('/servicio-conectividad')}}">Conectividad</a>
              <a class="dropdown-item" href="{{url('/servicio-integracion')}}">Integracion electronica</a>
            </div>
          </li>
          <li class="nav-item active">

            <a class="nav-link menusito hvr-radial-out" href="{{url('/blogg')}}">BLOG</a>

          </li>


          <li class="nav-item active">


            <a class="nav-link menusito hvr-radial-out" href="{{url('/contactenos')}}">CONTACTENOS</a>

          </li>


        </ul>



      </div>
    </div>

  </nav>


</header>
<!--/header-->