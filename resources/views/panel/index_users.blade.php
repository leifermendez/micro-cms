@extends('layouts.new-app')

@section('content')
    <div class="page-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="search-form">
                <form action="#" method="GET">
                    <div class="input-group">
                        <input tyape="text" name="search" class="form-control search-input" placeholder="Type something...">
                        <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                    </div>
                </form>
            </div>
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
            <div class="page-title">
                <h3 class="breadcrumb-header">Usuarios</h3>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-white">

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Nivel</th>
                                            <th>Fecha</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <th scope="row">{{$user->id}}</th>
                                                <td><a href="{{url('admin/users/'.$user->id)}}/edit">{{$user->name}}</a></td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->level}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td><a href="{{url('admin/users')}}/{{$user->id}}" data-method="DELETE"
                                                       class="btn-danger btn-sm fa-pull-right"
                                                       data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                                        <i class="fa fa-trash fa-xs"></i>
                                                    </a></td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- Row -->
            </div><!-- Main Wrapper -->
            <div class="page-footer">
                <p>Made with <i class="fa fa-heart"></i> by stacks</p>
            </div>
        </div><!-- /Page Inner -->
        <div class="page-right-sidebar" id="main-right-sidebar">
            <div class="page-right-sidebar-inner">
                <div class="right-sidebar-top">
                    <div class="right-sidebar-tabs">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active" id="chat-tab"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">chat</a></li>
                            <li role="presentation" id="settings-tab"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">settings</a></li>
                        </ul>
                    </div>
                    <a href="javascript:void(0)" class="right-sidebar-toggle right-sidebar-close" data-sidebar-id="main-right-sidebar"><i class="icon-close"></i></a>
                </div>
                <div class="right-sidebar-content">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="chat">
                            <div class="chat-list">
                                <span class="chat-title">Recent</span>
                                <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread" data-sidebar-id="chat-right-sidebar">
                                    <div class="user-avatar">
                                        <img src="../../assets/images/avatars/avatar1.jpg" alt="">
                                    </div>
                                    <div class="chat-info">
                                        <span class="chat-author">David</span>
                                        <span class="chat-text">where u at?</span>
                                        <span class="chat-time">08:50</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="right-sidebar-toggle chat-item unread active-user" data-sidebar-id="chat-right-sidebar">
                                    <div class="user-avatar">
                                        <img src="../../assets/images/avatars/avatar2.jpg" alt="">
                                    </div>
                                    <div class="chat-info">
                                        <span class="chat-author">Daisy</span>
                                        <span class="chat-text">Daisy sent a photo.</span>
                                        <span class="chat-time">11:34</span>
                                    </div>
                                </a>
                            </div>
                            <div class="chat-list">
                                <span class="chat-title">Older</span>
                                <a href="javascript:void(0);" class="right-sidebar-toggle chat-item" data-sidebar-id="chat-right-sidebar">
                                    <div class="user-avatar">
                                        <img src="../../assets/images/avatars/avatar3.jpg" alt="">
                                    </div>
                                    <div class="chat-info">
                                        <span class="chat-author">Tom</span>
                                        <span class="chat-text">You: ok</span>
                                        <span class="chat-time">2d</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                    <div class="user-avatar">
                                        <img src="../../assets/images/avatars/avatar4.jpg" alt="">
                                    </div>
                                    <div class="chat-info">
                                        <span class="chat-author">Anna</span>
                                        <span class="chat-text">asdasdasd</span>
                                        <span class="chat-time">4d</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="right-sidebar-toggle chat-item active-user" data-sidebar-id="chat-right-sidebar">
                                    <div class="user-avatar">
                                        <img src="../../assets/images/avatars/avatar1.jpg" alt="">
                                    </div>
                                    <div class="chat-info">
                                        <span class="chat-author">Liza</span>
                                        <span class="chat-text">asdasdasd</span>
                                        <span class="chat-time">&nbsp;</span>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="load-more-messages" data-toggle="tooltip" data-placement="bottom" title="Load More">•••</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                            <div class="right-sidebar-settings">
                                <span class="settings-title">General Settings</span>
                                <ul class="sidebar-setting-list list-unstyled">
                                    <li>
                                        <span class="settings-option">Notifications</span><input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(99, 114, 130); border-color: rgb(99, 114, 130); box-shadow: rgb(99, 114, 130) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                    <li>
                                        <span class="settings-option">Activity log</span><input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(99, 114, 130); border-color: rgb(99, 114, 130); box-shadow: rgb(99, 114, 130) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                    <li>
                                        <span class="settings-option">Automatic updates</span><input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s;"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                    <li>
                                        <span class="settings-option">Allow backups</span><input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s;"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                </ul>
                                <span class="settings-title">Account Settings</span>
                                <ul class="sidebar-setting-list list-unstyled">
                                    <li>
                                        <span class="settings-option">Chat</span><input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(99, 114, 130); border-color: rgb(99, 114, 130); box-shadow: rgb(99, 114, 130) 0px 0px 0px 0px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                    <li>
                                        <span class="settings-option">Incognito mode</span><input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s;"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                    <li>
                                        <span class="settings-option">Public profile</span><input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s, box-shadow 0.4s;"><small style="left: 0px; transition: background-color 0.4s, left 0.2s;"></small></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-right-sidebar" id="chat-right-sidebar">
            <div class="page-right-sidebar-inner">
                <div class="right-sidebar-top">
                    <div class="chat-top-info">
                        <span class="chat-name">Noah</span>
                        <span class="chat-state">2h ago</span>
                    </div>
                    <a href="javascript:void(0)" class="right-sidebar-toggle chat-sidebar-close pull-right" data-sidebar-id="chat-right-sidebar"><i class="icon-keyboard_arrow_right"></i></a>
                </div>
                <div class="right-sidebar-content">
                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="right-sidebar-chat slimscroll" style="overflow: hidden; width: auto; height: 250px;">
                            <div class="chat-bubbles">
                                <div class="chat-start-date">02/06/2017 5:58PM</div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="../../assets/images/avatars/avatar1.jpg" alt="">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello</span>
                                    </div>
                                </div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">Hello!</span>
                                    </div>
                                </div>
                                <div class="chat-start-date">03/06/2017 4:22AM</div>
                                <div class="chat-bubble me">
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">lorem</span>
                                    </div>
                                </div>
                                <div class="chat-bubble them">
                                    <div class="chat-bubble-img-container">
                                        <img src="../../assets/images/avatars/avatar1.jpg" alt="">
                                    </div>
                                    <div class="chat-bubble-text-container">
                                        <span class="chat-bubble-text">ipsum dolor sit amet</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="slimScrollBar" style="background: rgb(204, 204, 204); width: 6px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 0px; z-index: 99; right: 0px; height: 641px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 0px;"></div></div>
                    <div class="chat-write">
                        <form class="form-horizontal" action="javascript:void(0);">
                            <input type="text" class="form-control" placeholder="Say something">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection