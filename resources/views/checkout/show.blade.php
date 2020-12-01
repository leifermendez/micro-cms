<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @foreach($metas as $datum)
        @if($datum->enabled)
            {!! $datum->sett_value !!}
        @else
            <meta name="{{$datum->sett_key}}" content="{{$datum->sett_value}}">
        @endif
    @endforeach



    @foreach($options as $option)
        @if($option->sett_key==='title')
            <title>{{$option->sett_value}}</title>
    @endif
@endforeach



<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>


</head>
<body class="footer-dark">
<div class="overlay">
    <div class="in">
        <img src="{{asset('img/loading_svg.svg')}}" alt="">
    </div>
</div>
<!-- Header -->
<header id="header" class="header-dynamic header-shadow-scroll headroom headroom--not-bottom headroom--pinned headroom--top">
    <div class="container">
        <a class="logo" href="https://demo.serifly.com/cloudhub/html/index.html">
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
    <section class="content-row content-row-gray" id="services">
        <div class="container">

            <header class="content-header">
                <h2>
                    Plataforma de pago
                </h2>
                <p>
                    Realiza tu transacción de forma facil y sencilla
                </p>
            </header>

            <div class="column-row align-center-bottom">

                <div class="column-33">
                    <div class="product-box">
                        <div class="product-header">
                            <form id="checkout" method="post" action="/checkout">
                                <div id="payment-form"></div>
                                <input type="hidden" name="id_service" value="">
                                <input type="submit" value="Pagar $ {{ app('request')->input('price') }}">
                            </form>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- Content Row -->

</section>
<!-- Footer -->
@include('layouts.footer')
@include('layouts.scripts')
</html>
