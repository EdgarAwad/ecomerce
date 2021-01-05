@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')

<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('category.index')}}" class="current">Categories</a></div>
<div class="container-fluid">
    @if(Session::has('message'))
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done!</strong> {{Session::get('message')}}
    </div>
    @endif
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Blog</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>texto</th>
                        <th>imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($blog as $blogs)
                    <tr class="gradeC">
                        <td style="vertical-align: middle;">{{$blogs->nombre}}</td>
                        <td style="vertical-align: middle;">{!!substr($blogs->contenido,0,300)!!}...</td>
                        <td style="text-align: middle;"><img src="{{url('blog/small',$blogs->imagen)}}" alt="" width="50"></td>
                        <td style="text-align: center; vertical-align: middle;">
                            <a href="#myModal{{$blogs->id}}" data-toggle="modal" class="btn btn-info btn-mini">Ver</a>
                            <a href="{{route('blog.edit',$blogs->id)}}" class="btn btn-primary btn-mini">Editar</a>
                            <a href="javascript:" rel="{{$blogs->id}}" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Borrar</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@section('jsblock')
<script src="{{asset('js/excanvas.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/matrix.dashboard.js')}}"></script>
<script src="{{asset('js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('js/matrix.interface.js')}}"></script>
<script src="{{asset('js/matrix.chat.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/matrix.popover.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/matrix.tables.js')}}"></script>
<script src="{{asset('js/matrix.form_validation.js')}}"></script>
<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
@endsection