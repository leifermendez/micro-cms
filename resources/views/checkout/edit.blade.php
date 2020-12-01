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
    <section class="content-row content-row-gray">
        <div class="container">
            <header class="content-header">
                <h2>
                    Gracias por tu pago
                </h2>
                <p>
                    A continuacion detalles de tu transacción
                </p>

            </header>
            <div class="column-row align-center-bottom">
                <div class="column-50">
                    <div class="product-box height-430">
                        <div class="product-header">
                            @if($data->status=='succeeded' || $data->status=='active')
                                <h3><i class="fa fa-check-circle fa-3x"></i></h3>
                            @else
                                <h3 class="add-75-top"><i class="fa fa-exclamation-triangle fa-3x"></i></h3><br>
                            @endif
                            @if($data->amount)
                                <h4>
                                    ID: <b>{{$data->code}}</b>
                                </h4>
                            @endif

                            <p>Estatus de la transaccion: <b>{{$data->status}}</b></p>


                        </div>
                        @if($data->amount)
                            <div class="product-price">
                                {{$data->currency}} {{number_format($data->amount, 2)}}
                            </div>
                        @endif

                        <div class="product-features">
                            <p>Los detalles de tu transacción se enviaran via email. <br> Si tienes algun inconveniente
                                reportar.
                                <a href="/#contact-form-id">Aquí</a></p>
                        </div>
                        <div class="product-order">
                            <a class="button button-secondary" href="{{url('checkout/'.$data->id.'/ticket/pdf')}}">
                                <i class="fa fa-file-alt icon-left"></i>Descargar
                            </a>
                        </div>
                    </div>
                </div>
                @if($data->status=='succeeded')
                    <div class="column-50">
                        <div class="product-box height-430">
                            <div class="product-header">

                                <img class="img-circle" src="{{$agent->avatar}}" alt="">
                                <h4>
                                    <b>{{$agent->name}}</b>
                                </h4>

                                <p>Agente asignado</p>


                            </div>

                            <div class="product-features">
                                <p>Si eres un nuevo usuario en breve enviaremos a tu email una clave de acceso,
                                    el agente esta esperando por ti.
                                    <br>Gracias por preferirnos.</p>
                            </div>
                            <div class="product-order">
                                <a class="button button-secondary" href="{{url('admin/home')}}">
                                    <i class="fa fa-envelope icon-left"></i>Contactar
                                </a>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>

</section>
<!-- Footer -->

@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>
