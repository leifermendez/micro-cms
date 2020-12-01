@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Contenido
                        <a class="btn-success btn-sm fa-pull-right" href="{{url('post')}}/create">
                            Nuevo <i class="fa fa-plus fa-sm"></i>
                        </a></div>

                    <div class="card-body">
                        <ul class="list-group list-group-flush block-height-400">
                        @foreach($content as $con)
                                <li class="list-group-item">{{$con->title}}
                                    <div class="form-group">
                                        <a href="{{url('post')}}/{{$con->id}}/edit"
                                           class="btn-info btn-sm fa-pull-right">
                                            <i class="fa fa-edit fa-xs"></i>
                                        </a>
                                        <a href="{{url('post')}}/{{$con->id}}" data-method="DELETE"
                                           class="btn-danger btn-sm fa-pull-right"
                                           data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                            <i class="fa fa-trash fa-xs"></i>
                                        </a>
                                    </div>
                                </li>
                        @endforeach
                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Opciones
                        <a class="btn-success btn-sm fa-pull-right" href="{{url('admin')}}/create">
                            Nuevo <i class="fa fa-plus fa-sm"></i>
                        </a>
                    </div>

                    <div class="card-body">
                        <form action="{{url('admin')}}" method="POST">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div id="list_options" class="block-height-360">
                                @foreach($metas as $meta)
                                    <div class="form-group">
                                        <a href="{{url('admin')}}/{{$meta->id}}" data-method="DELETE"
                                           class="btn-danger btn-sm fa-pull-right"
                                           data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                            <i class="fa fa-trash fa-xs"></i>
                                        </a>

                                        <label for="exampleInputEmail1">{{$meta->sett_key}}</label>
                                        <input type="text" class="form-control" name="{{$meta->id}}" id="exampleInputEmail1" value="{{$meta->sett_value}}" aria-describedby="emailHelp" placeholder="Enter email">

                                        @if($meta->meta == 1)
                                            <small id="emailHelp" class="form-text text-muted">Meta</small>
                                        @else
                                            <small id="emailHelp" class="form-text text-muted">Etiqueta</small>
                                        @endif

                                    </div>
                                @endforeach

                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6 add-30-top">
                <div class="card">
                    <div class="card-header">Precios
                        <a class="btn-success btn-sm fa-pull-right" href="{{url('prices')}}/create">
                            Nuevo <i class="fa fa-plus fa-sm"></i>
                        </a>
                    </div>

                    <div class="card-body">

                            <div id="list_options" class="block-height-360">
                                @foreach($services as $service)
                                    <div class="form-group">
                                        <a href="{{url('prices')}}/{{$service->id}}" data-method="DELETE"
                                           class="btn-danger btn-sm fa-pull-right"
                                           data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                            <i class="fa fa-trash fa-xs"></i>
                                        </a>

                                        <h4>{{$service->title}}</h4>
                                        <p>Precio: {{$service->price}}<br> {{$service->description}}</p>


                                    </div>
                                @endforeach

                            </div>



                    </div>
                </div>

            </div>
            <div class="col-md-6 add-30-top">
                <div class="card">
                    <div class="card-header">Comentarios
                        <a class="btn-success btn-sm fa-pull-right" href="{{url('comments')}}/create">
                            Nuevo <i class="fa fa-plus fa-sm"></i>
                        </a>
                    </div>

                    <div class="card-body">
                            <div id="list_options" class="block-height-360">
                                @foreach($comments as $comment)
                                    <div class="form-group">
                                        <a href="{{url('comments')}}/{{$comment->id}}" data-method="DELETE"
                                           class="btn-danger btn-sm fa-pull-right"
                                           data-token="{{csrf_token()}}" data-confirm="Are you sure?">
                                            <i class="fa fa-trash fa-xs"></i>
                                        </a>
                                        <h4>{{$comment->name}}</h4>
                                        <p>{{$comment->nickname}}<br>
                                           {{$comment->description}}</p>

                                    </div>
                                @endforeach

                            </div>

                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="row justify-content-center">

        </div>
    </div>

@endsection
