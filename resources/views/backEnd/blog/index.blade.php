@extends('backEnd.layouts.master')
@section('title','Add Coupons Page')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('coupon.index')}}">blog</a> <a href="{{route('coupon.create')}}" class="current">Add New blog</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add New post</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('blog.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label for="coupon_code" class="control-label">Titulo</label>
                        <div class="controls" >
                            <input type="text" name="nombre" id="nombre" class="form-control" value=""
                                   title=""  style="width: 400px;">
                            
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="amount" class="control-label">Contenido</label>
                        <div class="controls" >
                        <textarea class="textarea_editor span12" name="contenido" id="contenido" rows="6" placeholder="Contenido del post" style="width: 580px;"></textarea>
                           
                        </div>
                    </div>

                    <div class="control-group">
                        <label  class="control-label">Imagen</label>
                        <div class="controls">
                        <input type="file" name="imagen" id="imagen"/>
                            
                        </div>
                    </div>


                   
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection