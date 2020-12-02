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
        @if(count($messages))
            <div class="page-inner">
                <div id="main-wrapper">
                    @if(app('request')->input('msg'))
                        <div class="alert alert-success">
                            {{app('request')->input('msg')}}
                        </div>
                    @endif


                    <div class="cross-page-line"></div>
                    <div class="row">
                        <div class="col-md-3">

                            <div class="email-list">
                                <ul class="list-unstyled">
                                    @foreach($messages as $message)
                                        <li>
                                            <a href="{{url('admin/home')}}/{{$message->id}}">
                                                <div class="email-list-item">
                                                    <div class="email-author">
                                                        <img src="{{$message->user_avatar}}" alt="">
                                                        <span class="author-name">{{$message->title}}</span>
                                                        <span class="email-date">{{$message->created_at}}</span>
                                                    </div>
                                                    <div class="email-info">

                                                    <span class="email-text">
                                                            {{$message->description}}
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="email">

                                <div class="email-header">
                                    <div class="email-title"><p>{{$single->title}}</p></div>
                                    <span class="divider"></span>
                                    <div class="email-author">
                                        <img src="{{$single->user_avatar}}" alt="">
                                        <span class="author-name">{{$single->user_email}}</span>
                                        <span class="email-date">{{$single->created_at}}</span>
                                    </div>
                                    <span class="divider"></span>
                                </div>
                                <div class="email-body">
                                        <span>
                                            {{$single->description}}
                                        </span>
                                </div>
                                <form action="{{url('admin/home')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="email-reply">
                                        <div class="note-editor">
                                            <div class="note-dropzone">
                                                <div class="note-dropzone-message"></div>
                                            </div>
                                            <div class="note-dialog">
                                                <div class="note-image-dialog modal" aria-hidden="false">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" aria-hidden="true"
                                                                        tabindex="-1">×
                                                                </button>
                                                                <h4 class="modal-title">Insert Image</h4></div>

                                                            <div class="modal-body">
                                                                <div class="form-group row-fluid note-group-select-from-files">
                                                                    <label>Select from files</label><input
                                                                            class="note-image-input" type="file"
                                                                            name="files" accept="image/*"></div>
                                                                <div class="form-group row-fluid"><label>Image
                                                                        URL</label><input
                                                                            class="note-image-url form-control span12"
                                                                            type="text"></div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button href="#"
                                                                        class="btn btn-primary note-image-btn disabled"
                                                                        disabled="">Insert Image
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-link-dialog modal" aria-hidden="false">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" aria-hidden="true"
                                                                        tabindex="-1">×
                                                                </button>
                                                                <h4 class="modal-title">Insert Link</h4></div>

                                                            <div class="modal-body">
                                                                <div class="form-group row-fluid"><label>Text to
                                                                        display</label><input
                                                                            class="note-link-text form-control span12"
                                                                            type="text"></div>
                                                                <div class="form-group row-fluid"><label>To what URL should
                                                                        this link go?</label><input
                                                                            class="note-link-url form-control span12"
                                                                            type="text"></div>
                                                                <div class="checkbox"><label><input type="checkbox"
                                                                                                    checked=""> Open in new
                                                                        window</label></div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button href="#"
                                                                        class="btn btn-primary note-link-btn disabled"
                                                                        disabled="">Insert Link
                                                                </button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="note-handle">
                                                <div class="note-control-selection">
                                                    <div class="note-control-selection-bg"></div>
                                                    <div class="note-control-holder note-control-nw"></div>
                                                    <div class="note-control-holder note-control-ne"></div>
                                                    <div class="note-control-holder note-control-sw"></div>
                                                    <div class="note-control-sizing note-control-se"></div>
                                                    <div class="note-control-selection-info"></div>
                                                </div>
                                            </div>
                                            <div class="note-popover">
                                                <div class="note-link-popover popover bottom in" style="display: none;">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content"><a href="http://www.google.com"
                                                                                    target="_blank">www.google.com</a>&nbsp;&nbsp;<div
                                                                class="note-insert btn-group">
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="showLinkDialog" data-hide="true"
                                                                    tabindex="-1" data-original-title="Edit (⌘+K)"><i
                                                                        class="fa fa-edit"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="unlink" tabindex="-1"
                                                                    data-original-title="Unlink"><i class="fa fa-unlink"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="note-image-popover popover bottom in" style="display: none;">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="resize" data-value="1" tabindex="-1"
                                                                    data-original-title="Resize Full"><span
                                                                        class="note-fontsize-10">100%</span></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="resize" data-value="0.5" tabindex="-1"
                                                                    data-original-title="Resize Half"><span
                                                                        class="note-fontsize-10">50%</span></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="resize" data-value="0.25" tabindex="-1"
                                                                    data-original-title="Resize Quarter"><span
                                                                        class="note-fontsize-10">25%</span></button>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="floatMe" data-value="left"
                                                                    tabindex="-1" data-original-title="Float Left"><i
                                                                        class="fa fa-align-left"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="floatMe" data-value="right"
                                                                    tabindex="-1" data-original-title="Float Right"><i
                                                                        class="fa fa-align-right"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="floatMe" data-value="none"
                                                                    tabindex="-1" data-original-title="Float None"><i
                                                                        class="fa fa-align-justify"></i></button>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="imageShape" data-value="img-rounded"
                                                                    tabindex="-1" data-original-title="Shape: Rounded"><i
                                                                        class="fa fa-square"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="imageShape" data-value="img-circle"
                                                                    tabindex="-1" data-original-title="Shape: Circle"><i
                                                                        class="fa fa-circle-o"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="imageShape" data-value="img-thumbnail"
                                                                    tabindex="-1" data-original-title="Shape: Thumbnail"><i
                                                                        class="fa fa-picture-o"></i></button>
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="imageShape" tabindex="-1"
                                                                    data-original-title="Shape: None"><i
                                                                        class="fa fa-times"></i></button>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-sm btn-small"
                                                                    title="" data-event="removeMedia" data-value="none"
                                                                    tabindex="-1" data-original-title="Remove Image"><i
                                                                        class="fa fa-trash-o"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="id_message" value="{{$single->id}}">
                                            <textarea class="form-control ckeditor" rows="10" name="message" placeholder="Escribe tu mensaje"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="email-actions">
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                        @if(\Illuminate\Support\Facades\Auth::user()->level!='user')
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Generar Pago</button>
                                        @endif
                                    </div>

                                </form>
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
                                                        <input type="text" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>
                                                    <label for="">Descripcion</label>
                                                    <div class="form-group">
                                                        <input type="text" name="description" class="form-control" id="input-Default">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_user" class="form-control" value="{{$single->from_user_id}}" id="input-Default">
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
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p>Made with <i class="fa fa-heart"></i> by codigoencasa.com</p>
                </div>
            </div><!-- /Page Inner -->
        @else
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">No tienes mensajes</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p>Made with <i class="fa fa-heart"></i> by codigoencasa.com</p>
                </div>
            </div>
        @endif


    </div>
@endsection