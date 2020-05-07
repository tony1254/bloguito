@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comentarios Index</div>

                <div class="card-body">

                    <div class="list-group">
                        @foreach ($comentarios as $comentario)

                        <a href="#" class="list-group-item list-group-item-action ">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{$comentario->user->name}}</h5>
                                <small>{{$comentario->created_at}}</small>
                            </div>
                            <p class="mb-1">{{$comentario->titulo}}</p>
                            <small>{{$comentario->descripcion}}</small>
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>                      
                        @endforeach
                    </div>

                    <a type="button" href="comentarios2/create" class="btn btn-success btn-block">Agregar</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
