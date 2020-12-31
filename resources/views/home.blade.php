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


                <li @click="menu=4" class="nav-item">
                        <a class="nav-link" href="/contenido"><i class="fa fa-group"></i> Aceptar</a>
                    </li>
            </div>
        </div>
    </div>
</div>

@endsection
