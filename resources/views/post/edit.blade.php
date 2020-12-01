@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contenido</div>

                    <form action="{{url('post')}}/{{$id}}" method="POST">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div id="list_options">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Titulo</label>
                                    <input type="text" class="form-control" name="title" value="{{$title}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripcion</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="6">
                                        {{$description}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Href</label>
                                    <input type="text" class="form-control" name="href" value="{{$href}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Icon</label>
                                    <input type="text" class="form-control" name="icon" value="{{$icon}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre Vinculo</label>
                                    <input type="text" class="form-control" name="link_name" value="{{$link_name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipo</label>
                                    <select  class="form-control" name="big">
                                        <option value="1">Grande</option>
                                        <option value="0">Regular</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Seccion</label>
                                    <select  class="form-control" name="section">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>



                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection
