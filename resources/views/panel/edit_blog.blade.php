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
            <form class="form-horizontal" action="{{url('admin/blog')}}/{{$blog->id}}" method="POST">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$blog->title}}" class="form-control" name="title" id="input-Default">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-help-block" class="col-sm-2 control-label">Sub titulo</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$blog->subtitle}}"  class="form-control" name="subtitle" id="input-help-block">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-10">
                        <textarea class="form-control ckeditor" name="description" id="" cols="30" rows="14">{{$blog->description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-help-block" class="col-sm-2 control-label">Servicio</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="service" id="">
                            <option value="">Ninguno</option>
                            @foreach($services as $service)
                                <option {{($blog->service==$service->id) ? 'selected':''}} value="{{$service->id}}">{{$service->title}} ({{number_format($service->price,2)}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$blog->image}}" class="form-control" name="image" id="input-Default">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" style="margin-top:10px;margin-bottom:-14px;">Guardar</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection