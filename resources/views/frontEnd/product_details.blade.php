@extends('frontEnd.layouts.master')
@section('title','Detalles')
@section('slider')
@endsection
@section('content')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            @include('frontEnd.layouts.category_menu')
        </div>
        <div class="col-sm-9 padding-right">
            @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
            @endif
            <div class="product-details">
                <!--product-details-->

                <div class="col-sm-5">
                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                        <a href="{{url('products/large',$detail_product->image)}}">
                            <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage" />
                        </a>
                    </div>

                    <ul class="thumbnails" style="margin-left: -10px;">
                        <li>
                            @foreach($imagesGalleries as $imagesGallery)
                            <a href="{{url('products/large',$imagesGallery->image)}}" data-standard="{{url('products/small',$imagesGallery->image)}}">
                                <img src="{{url('products/small',$imagesGallery->image)}}" alt="" width="75" style="padding: 8px;">
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
                <div class="col-sm-7">
                    <form action="{{route('addToCart')}}" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="products_id" value="{{$detail_product->id}}">
                        <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                        <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                        <input type="hidden" name="product_color" value="{{$detail_product->p_color}}">
                        <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                        <div class="product-information">
                            <!--/product-information
                        <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" />-->
                            <h2 style="color:#464342 ; font-size:30px;">{{$detail_product->p_name}}</h2>


                            <span>
                                <span style="color:#710000; font-size:20px;" id="dynamic_price"> ${{$detail_product->price}}</span>
                                <br>
                                <label>Cantidad:</label>
                                <input type="text" name="quantity" value="1" id="inputStock" />
                                <br>

                                <p>En stock: {{$detail_product->p_color}}</p>
                                @if($detail_product->p_color>0)
                                <button type="submit" class="btn btn-primary" style="font-size: medium;margin:0%;" id="buttonAddToCart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Comprar
                                </button>
                                @endif
                            </span>
                            <p style="margin:0%;"><b>Condicion:</b>
                                @if($detail_product->p_color>0)
                                <span id="availableStock" style="color: green;">En Stock</span>
                                @else
                                <span id="availableStock" style="color: red;">fuera de Stock</span>
                                @endif
                            </p>
                            <p style="margin:0%;"><b>Condicion:</b> Nuevo</p>

                        </div>
                        <!--/product-information-->
                    </form>

                </div>
            </div>
            <!--/product-details-->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class=" nav-link bgazo " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="color:white; font-size:medium;">Descripcion</a>
                    <a class=" nav-link bgazo " id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style=" color:white; font-size:medium;">Detalles del producto</a>
                    <a class=" nav-link bgazo " id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" style=" color:white; font-size:medium;">Documentacion</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <br>
                    <h3>Descripcion</h3>
                    <p class="parrafos" style="font-weight: 50px;"> {{$detail_product->description}}</p>
                </div>
                <div class="tab-pane " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <br>
                    <p class="parrafos" style="font-weight: 50px;"> {{$detail_product->detalles}}</p>
                </div>
                <div class="tab-pane " id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <br>
                    <p class="parrafos" style="font-weight: 50px;"> {{$detail_product->documentacion}}</p>
                </div>
            </div>


            <br>
            <br>
            <br>
            <div class="recommended_items">
                <!--recommended_items-->
                <h2 class="titulo clazo">Productos recomendados</h2>

                <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $countChunk = 0; ?>
                        @foreach($relateProducts->chunk(3) as $chunk)
                        <?php $countChunk++; ?>
                        <div class="item<?php if ($countChunk == 1) {
                                            echo ' active';
                                        } ?>">
                            @foreach($chunk as $item)
                            <div class="col-sm-3 ">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo ">
                                            <a href="{{url('/product-detail',$item->id)}}"> <img src="{{url('/products/small',$item->image)}}" alt="" style="width: 150px;" /></a>
                                            <h3 style="color: #710000" style="font-weight: 100;">{{$item->p_name }}</h3>
                                            <p style="margin: 0px; text-align: justify; font-size:12px;">{!!substr($item->description,0,100)!!}...</p>
                                            <p class="clcaf" style=" font-size:15px; font-weight: 700;">${{$item->price }}</p>
                                            <p style="color: green ; ">En stock: {{$item->p_color }}</p>
                                            <p><a href="{{url('/product-detail',$item->id)}}" class="clcaf"><i class="far fa-eye"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
            <!--/recommended_items-->

        </div>
    </div>
</div>
@endsection