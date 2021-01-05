@extends('frontEnd.layouts.master')
@section('title','Sujerencias, quejas y reclamos')
@section('slider')
@section('content')

<section>

    <div class="jumbotron " style=" background: url('products/small/atencion.jpg') top center fixed;
          background-size: cover; padding: 0%; margin: 0%;">
        <div class="container fondo">
            <div class="row">
            <img src="{{ asset('img/all.png') }}" alt="" width="100px">
            <h1 class="animate__animated animate__backInLeft display-3 " style="color: white;">  Sugerencias, quejas y reclamos</h1>
            </div>
            <p class="animate__animated animate__backInRight" style="color: white;">Alltronica tiene un espacio para todos tus comentarios, no dudes en hablar con nosotros.</p>
            <!--  <p><a class="btn btn-primary" href="#" role="button">Nosotros &raquo;</a></p>-->
        </div>
    </div>
</section>
<br>
<br>

<div class="row no-gutters">
    <div class="site-section col-md-3">
    </div>
    <div class="site-section col-md-6">

        <div class="row col-md-12">

            <div class="col-md-12">

                <form action="#" method="post">

                    <div class="p-3 p-lg-5 border" style="background: #333333 ;color:white">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
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
                                <label for="c_message" class="text-black">Mensaje</label>
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

</div>
<br>
<br>


@endsection