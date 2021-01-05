@extends('frontEnd.layouts.master')
@section('title','Contactenos')

@section('content')
<br>
<br>

<div class="row no-gutters">
  <div class="site-section col-md-6">

    <div class="row col-md-12">
      <div class="col-md-12">
        <h2 class="h1 mb-4 " style="text-align: center;">Contactenos</h2>
      </div>
      <div class="col-md-12">

        <form action="#" method="post">

          <div class="p-3 p-lg-5 border" style="background: #464342;color:white">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black" require>Nombre <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Apellido <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_subject" class="text-black">Asunto </label>
                <input type="text" class="form-control" id="c_subject" name="c_subject">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">Mensaje </label>
                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block bgcaf" value="enviar">
              </div>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
  <div class="col-md-6">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5323289871353!2d-74.13771938580967!3d4.67712139660268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c9bcd331beb%3A0x8b750344f2eb06bd!2sCompa%C3%B1ia%20Internacional%20de%20Mantenimiento%20CIMA%20LTDA!5e0!3m2!1ses-419!2sco!4v1601373696097!5m2!1ses-419!2sco" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <br>
    <br>

    <div style="background: #464342; text-align: center; padding: 20px; ">
      <p style="color:white; font-size: 15px;"> siguenos en nuestras redes</p>
      <div class="row" style="text-align: center;">

        <div class="col-md-12">
          <i class="fab fa-facebook-f redesgrande"></i><i class="fab fa-instagram redesgrande"></i> <i class="fab fa-whatsapp redesgrande"></i><i class="far fa-envelope redesgrande"></i><i class="fab fa-twitter redesgrande"></i>
        </div>
      </div>
      <a href="{{ url('/quejas') }}" style="text-decoration: none;">
        <p class="quejas">sugerencias quejas y reclamos</p>
      </a>
    </div>

  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-md-6" style="text-align: center;">
    <h2 class="clcaf titulo">Nuestras oficinas</h2>
    <h5 class="parrafos" style="text-align: center;">cra 96j No 23a-55 <br> Bogota(Colombia) <br> Tel:3017779956</h5>

  </div>
  <div class="col-md-6" style="text-align: center;">
    <h2 class="clcaf titulo">Horarios de atencion</h2>
    <h5 class="parrafos" style="text-align: center;">Lunes a viernes 7:30am-12:30pm y 1:30-5:30pm</h5>
  </div>
</div>
<br>
<br>

@endsection