@extends('layouts.new-app')

@section('content')
    <div class="page-content">
        <!-- Page Header -->
        <div class="page-header">

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <div class="logo-sm">
                            <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                            <a class="logo-box" href="index.html"><span>Space</span></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i
                                            class="fa fa-bars"></i></a></li>
                            <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown user-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><img
                                            src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="" class="img-circle"></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div><!-- /Page Header -->
        <!-- Page Inner -->
        <div class="page-inner">
            <form class="form-horizontal" action="{{url('admin/ads')}}/{{$id}}" method="POST">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">

                    <div class="col-sm-12">
                        <label for="input-Default">Nombre</label>
                        <input type="text" value="{{$name}}" class="form-control" name="name" id="input-Default">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <label for="input-Default">Imagen</label>
                        <input type="text" value="{{$image}}" class="form-control" name="image" id="input-Default">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <label for="input-Default">Continente</label>
                        <input type="text" value="{{$continent}}" class="form-control" maxlength="2" name="continent" id="input-Default">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <label for="input-Default">Link</label>
                        <input type="text" value="{{$href}}" class="form-control" name="href" id="input-Default">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-12">
                        <label for="input-Default">Divisa</label>
                        <input type="text" value="{{$currency}}" class="form-control" name="currency" id="input-Default">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary" style="margin-top:10px;margin-bottom:-14px;">Actualizar datos</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection