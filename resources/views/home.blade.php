@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido A Nuestro Restaurante </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                Estás conectado


                <a href="" class="btn btn-info bt-sm">Aceptar</a>
            </div>
        </div>
    </div>
</div>

@endsection
