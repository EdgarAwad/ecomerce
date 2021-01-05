@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Products</a> <a href="#" class="current">Edit Product</a> </div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Add New Products</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{route('blog.update',$edit_blog->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{method_field("PUT")}}


                <div class="control-group">
                    <label for="nombre" class="control-label">titulo</label>
                    <div class="controls">
                        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$edit_blog->nombre}}" title="" required="required" style="width: 400px;">
                        
                    </div>
                </div>
            
                <div class="control-group">
                    <label for="contenido" class="control-label">Contenido</label>
                    <div class="controls">
                        <textarea class="textarea_editor span12" name="contenido" id="contenido" rows="6" placeholder="Contenido del post " style="width: 580px;">{{$edit_blog->contenido}}</textarea>
                        <span class="text-danger">{{$errors->first('description')}}</span>
                    </div>
                </div>
              
                <div class="control-group">
                    <label class="control-label">Imagen</label>
                    <div class="controls">
                        <input type="file" name="imagen" id="imagen" />
                        <span class="text-danger">{{$errors->first('image')}}</span>
                        @if($edit_blog->imagen!='')
                        &nbsp;&nbsp;&nbsp;
                        <a href="javascript:" rel="{{$edit_blog->id}}" rel1="delete-image" class="btn btn-danger btn-mini deleteRecord">Borrar imagen</a>
                        <img src="{{url('products/small/',$edit_blog->imagen)}}" width="35" alt="">
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <label for="" class="control-label"></label>
                    <div class="controls">
                        <button type="submit" class="btn btn-success">Edit post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection