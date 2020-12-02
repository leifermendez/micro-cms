<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{asset('panel/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('panel/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('panel/plugins/icomoon/style.css')}}" rel="stylesheet">
    <link href="{{asset('panel/plugins/uniform/css/default.css')}}" rel="stylesheet"/>
    <link href="{{asset('panel/plugins/switchery/switchery.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('panel/plugins/nvd3/nv.d3.min.css')}}" rel="stylesheet">
    <link href="{{asset('panel/plugins/summernote-master/summernote.css')}}" rel="stylesheet" type="text/css"/>


    <!-- Theme Styles -->
    <link href="{{asset('panel/css/space.min.css')}}" rel="stylesheet">
    <link href="{{asset('panel/css/custom.css')}}" rel="stylesheet">

</head>
<body>

<div class="page-container">
    <!-- Page Sidebar -->
    <div class="page-sidebar">
        <a class="logo-box" href="{{url('admin/home')}}">
{{--            <span><img src="{{asset('img/logo-black.png')}}" width="120" alt=""></span>--}}
        </a>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <li>
                        <a href="{{url('admin/home')}}">
                            <i class="menu-icon fa fa-comments"></i> <span>Mensajes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('admin/transactions')}}">
                            <i class="menu-icon fa fa-list-ul"></i> <span>Transacciones</span>
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->level!='user')
                        <li>
                            <a href="{{url('admin/users')}}">
                                <i class="menu-icon fa fa-user"></i> <span>Usuarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/pay')}}">
                                <i class="menu-icon fa fa-credit-card"></i> <span>Pagos</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/coupons')}}">
                                <i class="menu-icon fa fa-percent"></i> <span>Cupones</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/blog')}}">
                                <i class="menu-icon fa fa-th-large"></i> <span>Blogs</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/products')}}">
                                <i class="menu-icon fa fa-th"></i> <span>Servicios</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/templates')}}">
                                <i class="menu-icon fa fa-envelope"></i> <span>Email</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/ads')}}">
                                <i class="menu-icon fa fa-box"></i> <span>Ads</span>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div><!-- /Page Sidebar -->

    <!-- Page Content -->
    @yield('content')

</div><!-- /Page Container -->
</body>
<script src="{{asset('panel/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
<script src="{{asset('panel/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('panel/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('panel/plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
<script src="{{asset('panel/plugins/switchery/switchery.min.js')}}"></script>
<script src="{{asset('panel/plugins/d3/d3.min.js')}}"></script>
<script src="{{asset('panel/plugins/nvd3/nv.d3.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.time.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.symbol.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('panel/plugins/flot/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('panel/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('panel/js/space.min.js')}}"></script>
<script src="{{asset('panel/js/pages/dashboard.js')}}"></script>
<script src="{{asset('panel/plugins/summernote-master/summernote.min.js')}}"></script>
<script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/laravel.js') }}" defer></script>
<script src="{{asset('panel/js/admin.js')}}"></script>
