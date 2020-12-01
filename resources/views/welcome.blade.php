<!doctype html>
<html lang="es">
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
@if(app('request')->input('error'))
    <section class="alert-error">
        <div class="alert alert-success">
            {{app('request')->input('error')}}
        </div>
    </section>
@endif

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
        <div class="content-slider animate-container-slide content-slider-has-nav" data-nav="true" data-rotation="5"
             style="height: 696px;">
            <ul>
                @foreach($sliders as $slider)
                    <li class="active" id="content-slider-nav-0-1" class="">{{$slider->name_link}}</li>
                @endforeach

            </ul>


            <div class="content-slider-inner">

                @foreach($sliders as $slider)
                    <a class="slide active-first active" data-title="{{$slider->name}}" href="{{$slider->href}}"
                       id="content-slider-0-0">
                        <div class="container">
                            <header class="content-header content-header-large content-header-uppercase">
                                <h1>
                                    {!! $slider->title !!}
                                </h1>
                                <p>
                                    {!! $slider->description !!}
                                </p>
                            </header>
                            <img src="{{$slider->image}}" alt="">
                        </div>
                    </a>
                @endforeach


            </div>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row" id="firstcontent">
        <div class="container">


            @foreach($contentsbig as $content)
                @if($content->section==1)
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

            @foreach($contents_block as $content)
                <div class="column-row align-center-bottom text-align-center">

                    @foreach($content as $c)

                        <div class="column-33">
                            <i class="{{$c->icon}}"></i>
                            <h3>
                                {{$c->title}}
                            </h3>
                            <p>
                                {!! $c->description !!}
                            </p>
                            <p>
                                <a href="{{$c->href}}">{{$c->link_name}}<i class="fa fa-angle-right icon-right"></i></a>
                            </p>
                        </div>
                    @endforeach


                </div>

            @endforeach

        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row content-row-gray" id="services">
        <div class="container">

            @foreach($contentsbig as $content)
                @if($content->section==2)
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


            @foreach($services_block as $services)
                <div class="column-row align-center-bottom text-align-center">

                    @foreach($services as $service)
                        <div class="column-33">
                            <div class="product-box">
                                <div class="product-header">
                                    <h4>
                                        {{$service->title}}
                                    </h4>
                                    <p>
                                        {!! $service->subtitle !!}
                                    </p>
                                </div>
                                <div class="product-price">
                                    ${{$service->price}}
                                </div>
                                <div class="product-features">
                                    {!! $service->description !!}
                                </div>
                                <div class="product-order">
                                    <a class="button button-secondary"
                                       href="{{url('blog')}}/{{$service->href}}/{{$service->friendly}}">
                                        <i class="fa fa-plus icon-left"></i>Ver más
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            @endforeach
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row">
        <div class="container" id="customers">
            @foreach($contentsbig as $content)
                @if($content->section==3)
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
            <div class="network-map">
                <ul>
                    <li style="top: 42%; left: 12.5%;">
                        <a href="#"><span class="label-top-left">San Francisco</span></a>
                    </li>
                    <li style="top: 50%; left: 18%;">
                        <a href="#"><span class="label-top-right">Mexico</span></a>
                    </li>
                    <li style="top: 65%; left: 28%;">
                        <a href="#"><span class="label-bottom-right">Bogota</span></a>
                    </li>
                    <li style="top: 41%; left: 45.5%;">
                        <a href="#"><span class="label-bottom-left">Madrid</span></a>
                    </li>
                    <li style="top: 36%; left: 48.5%;">
                        <a href="#"><span class="label-bottom-right">Munich</span></a>
                    </li>
                </ul>
                <img src="{{ asset('img/map-dark.svg') }}" alt="">
            </div>
            <div class="column-row align-center-bottom">
                @foreach($customers as $customer)
                    <div class="column-20 text-align-center">
                        <img src="{{$customer->image}}" class="img-customer" alt="{{$customer->name}}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Content Row -->
    <section class="content-row content-row-gray">
        <div class="container">
            @foreach($contentsbig as $content)
                @if($content->section==4)
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
            <div class="column-row align-center-bottom">
                @foreach($comments as $comment)
                    <div class="column-33">
                        <div class="testimonial">
                            <p class="testimonial-content">
                                {!! $comment->description !!}
                            </p>
                            <p class="testimonial-author">
                                <a href="{{$comment->href}}"><i class="fa fa-user icon-left"></i>{{$comment->name}}
                                </a><br>
                                <small>{{$comment->nickname}}</small>
                            </p>
                        </div>
                    </div>
                @endforeach

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
                <div class="container">
                    @include('layouts.formcontact')
                </div>
            </div>

        </div>
    </section>


</section>
@if($popupAd)
    <button class="button-primary button-full-width hidden" id="open_modal" data-modal-target="pop-ad">
        <i class="fa fa-lock icon-left"></i>Form Dialog
    </button>
    <div class="modal modal-popup" data-modal="pop-ad" data-modal-dismissible="true">
        <div class="modal-header">

        </div>
        <div class="modal-content modal-popup" style="background-image: url({{$popupAd->image}})">
            <a href="{{$popupAd->href}}">
                <canvas class="over-click"></canvas>
            </a>
        </div>
    </div>
@endif
@include('layouts.footer')
@include('layouts.scripts')
</body>
</html>
