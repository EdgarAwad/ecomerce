@extends('backEnd.layouts.master')
@section('title','Agregar producto')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Productos</a> <a href="{{route('product.create')}}" class="current">Agregar productos</a> </div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Agregar producto</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="control-group">
                    <label class="control-label">Categoria</label>
                    <div class="controls">
                        <select name="categories_id" style="width: 415px;">
                            @foreach($categories as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                            <?php
                            if ($key != 0) {
                                $sub_categories = DB::table('categories')->select('id', 'name')->where('parent_id', $key)->get();
                                if (count($sub_categories) > 0) {
                                    foreach ($sub_categories as $sub_category) {
                                        echo '<option value="' . $sub_category->id . '">&nbsp;&nbsp;--' . $sub_category->name . '</option>';
                                    }
                                }
                            }
                            ?>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label for="p_name" class="control-label">Nombre</label>
                    <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                        <input type="text" name="p_name" id="p_name" class="form-control" value="{{old('p_name')}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('p_name')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="p_code" class="control-label">Codigo</label>
                    <div class="controls{{$errors->has('p_code')?' has-error':''}}">
                        <input type="text" name="p_code" id="p_code" class="form-control" value="{{old('p_code')}}" title="" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('p_code')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="p_color" class="control-label">Stock</label>
                    <div class="controls{{$errors->has('p_color')?' has-error':''}}">
                        <input type="text" name="p_color" id="p_color" value="{{old('p_color')}}" required="required" style="width: 400px;">
                        <span class="text-danger">{{$errors->first('p_color')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="description" class="control-label">Descripcion</label>
                    <div class="controls{{$errors->has('description')?' has-error':''}}">
                        <textarea class="textarea_editor span12" name="description" id="description" rows="6" placeholder="Product Description" style="width: 580px;">{{old('description')}}</textarea>
                        <span class="text-danger">{{$errors->first('description')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="detalles" class="control-label">Detalles</label>
                    <div class="controls{{$errors->has('description')?' has-error':''}}">
                        <textarea class="textarea_editor span12" name="detalles" id="detalles" rows="6" placeholder="detalles del producto: accesorios, dimensiones, caracteristicas etc." style="width: 580px;">{{old('detalles')}}</textarea>
                        <span class="text-danger">{{$errors->first('detalles')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="documentacion" class="control-label">Documentacion</label>
                    <div class="controls{{$errors->has('description')?' has-error':''}}">
                        <textarea class="textarea_editor span12" name="documentacion" id="documentacion" rows="6" placeholder="datasheet" style="width: 580px;">{{old('documentacion')}}</textarea>
                        <span class="text-danger">{{$errors->first('documentacion')}}</span>
                    </div>
                </div>
                <div class="control-group">
                    <label for="price" class="control-label">Precio</label>
                    <div class="controls{{$errors->has('price')?' has-error':''}}">
                        <div class="input-prepend"> <span class="add-on">$</span>
                            <input type="number" name="price" id="price" class="" value="{{old('price')}}" title="" required="required">
                            <span class="text-danger">{{$errors->first('price')}}</span>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Imagen</label>
                    <div class="controls">
                        <input type="file" name="image" id="image" />
                        <span class="text-danger">{{$errors->first('image')}}</span>
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