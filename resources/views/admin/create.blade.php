@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Contenido</div>

                    <form action="{{url('admin')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div id="list_options">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tipo</label>
                                    <select  class="form-control" name="type_meta">
                                        <option value="1">Meta</option>
                                        <option value="0">Tag</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="key" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">
                                    <small id="emailHelp" class="form-text text-muted">Meta</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Value</label>
                                    <input type="text" class="form-control" name="value" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">
                                    <small id="emailHelp" class="form-text text-muted">Meta</small>
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
