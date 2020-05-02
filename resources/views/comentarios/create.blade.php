@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Comentarios Index</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('comentarios.store') }}" class="form">
                        @csrf
                        {{ method_field('POST') }}
                        <input type="text" name="titulo" placeholder="TITULO" value="" class="form-control">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion" placeholder="DESCRIPCION"></textarea>

                        <button type="submit" name="button" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </form>

<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
