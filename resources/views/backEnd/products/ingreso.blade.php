@extends('backEnd.layouts.master')
@section('title','Ingresar nuevos productos')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Productos</a> <a href="{{route('product.create')}}" class="current">Ingresar producto</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Ingresar productos</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Codigo</label>
                        <div class="controls">
                            <select name="categories_id" style="width: 415px;">
                                @foreach($categories as $key=>$value)
                                    <option id="codigo" value="">{{$value->p_code}}</option>
                                   
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_name" class="control-label"  >Nombre</label>
                        <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                            <input type="text" name="p_name" id="p_name" class="form-control" value="" readonly title="" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_name')}}</span>
                        </div>
                    </div>
                   <div class="control-group">
                        <label for="p_color" class="control-label">Stock</label>
                        <div class="controls{{$errors->has('p_color')?' has-error':''}}">
                            <input type="text" name="p_color" id="p_color" value="" readonly style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_color')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="p_color" class="control-label">Ingersar: </label>
                        <div class="controls{{$errors->has('p_color')?' has-error':''}}">
                            <input type="text" name="p_color" id="p_color" value="" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('p_color')}}</span>
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