<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.min.css') }}" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>


</head>
<body class="footer-dark">
<!-- Header -->
<header id="header" class="header-dynamic header-shadow-scroll headroom headroom--not-bottom headroom--pinned headroom--top">
    <div class="container">
        <a class="logo" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </a>

        <i id="nav-overlay-open" class="material-icons">menu</i></div>
</header>
<!-- Notification -->


<!-- Content -->
<section id="content">
    <!-- Content Row -->
    <section class="content-row content-row-color content-row-clouds">
        <div class="container">
            <header class="content-header content-header-small content-header-uppercase">
                <h1>
                    Client Login
                </h1>
                <p>
                    Este portal es exclusivo para nuestros clientes
                </p>
            </header>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row">
        <div class="container">
            <div class="column-row align-center">
                <div class="column-50">
                    <form class="form-full-width" method="POST" action="{{route('login')}}">
                        {{csrf_field()}}
                        <div class="form-row">
                            <label for="form-email">Email Address</label>
                            <input id="form-email" type="text" name="email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-row">
                            <label for="form-password">Password</label>
                            <input id="form-password" type="password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-row checkbox-style-block">
                            <div class="checkbox-style">
                                <div class="checkbox-style-icon"><i class="fa fa-check"></i>
                                </div>
                                <input id="form-login" type="checkbox" name="login" checked="false"></div>
                            <label for="form-login">Recordar sesion</label>
                        </div>
                        <div class="form-row">
                            <button class="button-secondary"><i class="fa fa-lock icon-left"></i>Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row content-row-gray">
        <div class="container">
            <div class="column-row align-center">
                <div class="column-50 text-align-center">
                    <p class="text-color-gray">
                        ¿Problemas para entrar?<br>
                        <a href="{{ route('register') }}">Registrar<i class="fa fa-angle-right icon-right"></i></a></a>
                        <a href="{{ route('password.request') }}"> ¿Olvido su contraseña?<i class="fa fa-angle-right icon-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- Footer -->
<footer id="footer">
    <section class="footer-primary">
        <div class="container">
            <div class="column-row">
                <div class="column-66">
                    <h5>
                        Nosotros
                    </h5>
                    <p>
                        Somos una empresa con el objetivo de brindar soluciones practicas y optimas en relacion a servicios en la nube como AWS, Google Cloud, Microsft Azure, entre otras.<br><br>
                        Av Cali 76 84A-18, Bogota<br>
                    </p>
                </div>
                <div class="column-66">
                    <div class="fb-like" data-href="https://www.facebook.com/awslatinoamerica/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-secondary">
        <div class="container">
            <p>
                Derechos reservados 2018.<br>
                En alianza con  <a target="_blank" href="http://leangasoftware.es">Leangasoftware</a>
            </p>
        </div>
    </section>
</footer>
<!-- Scripts -->
@include('layouts.scripts')
</body></html>
</html>
