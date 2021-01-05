@extends('frontEnd.layouts.master')
@section('title','Lista de Productos')
@section('slider')

@section('content')
<br>
<br>
<!--
<form action="{{url('/list-products')}}" method="get" enctype="multipart/form-data">
{{csrf_field() }}
<div class="row">
<div class="input-group input-group-lg col-sm-4" ></div>
<div class="input-group input-group-lg col-sm-4" >
<input class="form-control" type="text" name ="search2" id= "busdescripcion" value="" placeholder="  Buscar...">
<div class="input-group-append">
    <button class="carrito botonbuscar" type="submit" value="Buscar"><i class="fas fa-search"></i></button>
  </div>

  </div>
</div>
</form> -->
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            @include('frontEnd.layouts.category_menu')
        </div>
        <div class="col-sm-9 padding-right">
            <div class="titulo clcaf">
                <!--features_items-->

                <?php
                if ($byCate != "") {
                    $products = $list_product;
                    echo '<h2 class="title text-center">Categoria ' . $byCate->name . '</h2>';
                } else {
                    echo '<h2 class="titulo clazo"> Lista de Productos</h2>';
                }
                ?>

                @foreach($products as $product)
                @if($product->category->status==1)
                <div class="cajaproducto col-sm-3 col-5 hvr-wobble-horizontal" style="height: 350px;">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo titulo clazo">
                                <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                <h2 class="clazo"> {{$product->p_name}}
                                    <h2>
                                        <p style="color: #5d615e;font-size:10px;text-align:justify">{!!substr($product->description,0,150)!!}...</p>
                                        <p class="clcaf">${{$product->price}}</p>
                                        <p style="color: green;">{{$product->p_color}} disponibles </p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="clcaf"><i class="far fa-eye"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
                @endforeach
                {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
            </div>
            <!--features_items-->
        </div>
    </div>
</div>
<br>
<br>

@endsection