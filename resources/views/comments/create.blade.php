@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Comentario</div>

                    <form action="{{url('comments')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div id="list_options">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" name="name" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Descripcion</label>
                                    <input type="text" class="form-control" name="description" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">nickname</label>
                                    <input type="text" class="form-control" name="nickname" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Href</label>
                                    <input type="text" class="form-control" name="href" value="" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor">

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
