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
    <script src="https://js.stripe.com/v3/"></script>


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
                    Plataforma de pago
                </h2>
                <p>
                    Realiza tu transacción de forma facil y sencilla
                </p>
            </header>
            <div class="column-row align-center-bottom">

                <div class="column-50">
                    <table class="table-has-caption">
                        <caption>
                            Proceso de pago
                        </caption>
                        <tbody>
                        <tr>
                            <td>
                                {{$service->description}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cell example example1">
                                    <form id="form_pay" data-id="quick" data-pay="{{$service->id}}">
                                        <fieldset>
                                            <div class="row">
                                                <label for="example1-name" data-tid="elements_examples.form.name_label">Nombre</label>
                                                <input id="example1-name"
                                                       data-tid="elements_examples.form.name_placeholder" type="text"
                                                       placeholder="Tu nombre" required="">
                                                <input id="example1-idService"
                                                       data-tid="elements_examples.form.name_placeholder"
                                                       value="{{ app('request')->input('id') }}" type="hidden"
                                                       required="">
                                            </div>
                                            <div class="row">
                                                <label for="example1-email"
                                                       data-tid="elements_examples.form.email_label">Email</label>
                                                <input id="example1-email"
                                                       data-tid="elements_examples.form.email_placeholder" type="email"
                                                       placeholder="Email" required="">
                                            </div>
                                            <div class="row">
                                                <label for="example1-phone"
                                                       data-tid="elements_examples.form.phone_label">Telefono</label>
                                                <input id="example1-phone"
                                                       data-tid="elements_examples.form.phone_placeholder" type="tel"
                                                       placeholder="(941) 555-0123" required="">
                                            </div>
                                            <div class="row">
                                                <label for="example1-code"
                                                       data-tid="elements_examples.form.phone_label">Cupón</label>
                                                <input id="example1-code"
                                                       data-tid="elements_examples.form.phone_placeholder" type="text"
                                                       placeholder="Código descuento">
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="row">
                                                <div id="example1-card"></div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-row checkbox-style-block">
                                                <div class="checkbox-style"><i class="fa fa-check"></i>
                                                    <input id="form-pay" required
                                                           type="checkbox"
                                                           name="newsletter"></div>
                                                <label for="form-pay"></label>
                                                Acepto y confirmo tus <a href="{{url('/blog/12')}}" target="_blank">politicas de privacidad</a>

                                            </div>
                                        </fieldset>
                                        <div class="error" role="alert">
                                            <span class="message"></span>
                                        </div>
                                        <button type="submit" data-tid="elements_examples.form.pay_button">Pagar
                                            ${{$service->amount}}</button>
                                        <br>
                                        <div class="column-50">
                                            <img src="{{asset('img/pay-card.png')}}" height="30" alt="">
                                        </div>
                                        <div class="column-50">
                                            <p class="text-muted font-12">Nuestros pagos son procesados con <a
                                                        href="https://stripe.com/es/privacy" class="font-12" target="_blank">Stripe</a>.
                                                No almacenamos datos de tarjetas.
                                            </p>
                                        </div>
                                    </form>

                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                </div>


            </div>


            <div class="column-row align-center-bottom">
                <div class="column-50">
                    <h3>
                        <i class="fa fa-plus-circle icon-feature-inline"></i>Complementos disponibles
                    </h3>
                    <p>
                        Nuestros servicios incluyen un ticket de soporte el cual puedes tener un seguimiento preciso del
                        estado de tu solicitud.
                    </p>
                    <p>
                        <small class="text-color-gray">Todos nuestros pagos se realizan por adelantado bloqueando el
                            dinero de tu tarjeta para protección.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row content-row-color">
        <div class="container">
            @foreach($contentsbig as $content)
                @if($content->section==5)
                    <header class="content-header">
                        <h2>
                            {{$content->title}}
                        </h2>
                        <p>
                            {!! $content->description !!}
                        </p>
                    </header>
                @endif

            @endforeach

        </div>
        <div class="column-row align-center">
            <div class="column-50">
                @include('layouts.formcontact')
            </div>
        </div>
    </section>
    <!-- Content Row -->

</section>
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>
