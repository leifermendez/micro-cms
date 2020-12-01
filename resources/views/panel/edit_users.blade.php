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
            <form class="form-horizontal" action="{{url('admin/users')}}/{{$user->id}}" method="POST">
                {{csrf_field()}}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="input-Default" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$user->name}}" class="form-control" name="name" id="input-Default">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-help-block" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$user->email}}"  class="form-control" name="email" id="input-help-block">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-help-block" class="col-sm-2 control-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$user->phone}}"  class="form-control" name="phone" id="input-help-block">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-help-block" class="col-sm-2 control-label">Nivel</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="level" id="">
                            <option {{($user->level=='user') ? 'selected':''}} value="user">Usuario</option>
                            <option {{($user->level=='agent') ? 'selected':''}} value="agent">Agente</option>
                            <option {{($user->level=='admin') ? 'selected':''}} value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" style="margin-top:10px;margin-bottom:-14px;">Actualizar datos</button>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="margin-top:10px;margin-bottom:-14px;">Generar Pago</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <form action="{{url('admin/pay')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Generar Pago</h4>
                        </div>

                        <div class="modal-body">

                            <label for="">Monto</label>
                            <div style="margin-bottom:15px;" class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" name="amount" class="form-control" id="input-value-amount" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                            <label for="">Subscripcion</label>
                            <div class="form-group">
                                <select name="plan_subscription" class="form-control" id="input-subscription">
                                        <option value="">Sin subscripcion</option>
                                        @foreach($plans as $plan)
                                        <option data-amount="{{$plan['amount']/100}}" value="{{$plan['id']}}">{{$plan['nickname']}} ({{$plan['amount']/100}})</option>
                                        @endforeach
                                </select>
                            </div>
                            <label for="">Descripcion</label>
                            <div class="form-group">
                                <input type="text" name="description" class="form-control" id="input-Default">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_user" class="form-control" value="{{$user->id}}" id="input-Default">
                            </div>
                            <p class="text-muted">
                                El sistema enviara un link al email del usuario donde podra procesar su pago.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <!-- -->

    </div>
@endsection