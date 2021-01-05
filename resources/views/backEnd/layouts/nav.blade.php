<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="submenu {{$menu_active==1? ' active':''}}"><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categorias</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Nueva categoria</a></li>
                <li><a href="{{route('category.index')}}">Lista de categorias</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Productos</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Nuevo producto</a></li>
                <li><a href="{{route('product.index')}}">Lista de productos</a></li>
                <li><a href="{{route('ingresos.index')}}">Ingresos</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Cupones</span></a>
            <ul>
                <li><a href="{{route('coupon.create')}}">Nuevo cupon</a></li>
                <li><a href="{{route('coupon.index')}}">Lista de cupones</a></li>
            </ul>
        </li>
       
        <li class="submenu {{$menu_active==6? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Blog</span></a>
            <ul>
               
                <li><a href="{{route('blog.index')}}">Todos los post</a></li>
                <li><a href="{{route('blog.create')}}">Nuevo post</a></li>
            </ul>
        </li>

 <li class="submenu {{$menu_active==7? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Ventas</span></a>
            <ul>
               
                <li><a href="{{route('ventas.index')}}">Venta</a></li>
                <li><a href="{{route('facturas.index')}}">Facturas</a></li>
            </ul>
        </li>

        <li class="submenu {{$menu_active==8? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Galeria</span></a>
            <ul>
               
                <li><a href="{{route('galeria.index')}}">Todo en galeria</a></li>
                <li><a href="{{route('galeria.create')}}">Nueva galeria</a></li>
            </ul>
        </li>
        
        
    </ul>
</div>
<!--sidebar-menu-->