<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @foreach($metas as $datum)
        @if($datum->enabled)
            {!! $datum->sett_value !!}
        @elseif($datum->sett_key=='og:image')
            <meta name="{{$datum->sett_key}}" content="{{$data->image}}">
        @else
            <meta name="{{$datum->sett_key}}" content="{{$datum->sett_value}}">
        @endif
    @endforeach

    @foreach($options as $option)
        @if($option->sett_key==='title')
            <title>{{$data->title}} - {{$option->sett_value}}</title>
    @endif
@endforeach



<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"
            integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
            integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
            crossorigin="anonymous"></script>
    <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>


</head>
<body class="footer-dark">
<div class="overlay">
    <div class="in">
        <img src="{{asset('img/loading_svg.svg')}}" alt="">
    </div>
</div>
<!-- Header -->
<header id="header"
        class="header-dynamic header-shadow-scroll headroom headroom--not-bottom headroom--pinned headroom--top">
    <div class="container">
        <a class="logo" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </a>
        <nav>
            <ul class="nav-primary">
                @foreach($menus as $menu)
                    @if(!$menu->navbar)

                        <li>
                            <a href="{{$menu->href}}"><i class="{{$menu->icon}}"></i>{{$menu->name}}</a>
                        </li>
                    @endif
                @endforeach

                <li>
                    <a class="button button-secondary" href="{{ url('login') }}">
                        <i class="fa fa-lock icon-left"></i>Client Login
                    </a>
                </li>
            </ul>
            <ul class="nav-secondary">
                @foreach($menus as $menu)
                    @if($menu->navbar)
                        <li>
                            <a href="{{$menu->href}}"><i class="{{$menu->icon}}"></i>{{$menu->name}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <i id="nav-overlay-open" class="material-icons">menu</i></div>
</header>
<!-- Notification -->
@foreach($notifications as $notification)
    <section id="notification" data-dismissible="true" data-title="" data-expires="" style="display: block;">
        <div class="container"><i id="notification-dismiss" class="material-icons">close</i>
            <p>
                {!! $notification->description !!}
            </p>
        </div>
    </section>
@endforeach

<!-- Content -->
<section id="content">
    <!-- Content Row -->

    <section class="content-row content-row-color content-row-clouds">
        <div class="container">
            <header class="content-header content-header-small content-header-uppercase">
                <h1>
                    {{$data->title}}
                </h1>
                <p>
                    {{$data->subtitle}}
                </p>
            </header>
        </div>
    </section>
    <!-- Content Row -->
    @if($ref)
        <div class="alert-bar hidden"><h5><i class="fa fa-bell"></i><b> Hola! <em>{{$ref}}</em> si estas aquí y viste tu
                    reporte te interesa el siguiente contenido.</b></h5></div>

    @endif
    <section class="content-row">
        <div class="container">
            <article class="blog-article blog-article-center">

                <div class="blog-article-content">
                    {!! $data->description !!}
                </div>
            </article>
        </div>
    </section>
    <!-- Content Row -->
    <section id="comments-new" class="content-row content-row-gray">
        <div class="container">
            <div class="blog-comment-form blog-comment-form-center">
                <h3>
                    Estamos listos para comenzar. ¿Tú estas listo?
                </h3>
                <p class="text-color-gray">
                    Realiza tu pago, y despeja tu mente.
                </p>
                @if($service)
                <form class="form-full-width" method="get" action="{{URL::to('/')}}/checkout">
                    <input type="hidden" name="id" value="{{$service->id}}">
                    <div class="form-row">
                        <button class="button-secondary"><i class="fa fa-credit-card icon-left"></i>Solicitar servicio
                            $ {{number_format($service->price,2)}}</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </section>
    <!-- Content Row -->

</section>
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>
