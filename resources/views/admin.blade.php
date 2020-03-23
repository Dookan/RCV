@extends('layouts.app')

@section('content')
<div class="container mt-4 ">
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-body">
                    <!-- <h5 class="card-title">Title</h5> -->
                    <div class="d-flex flex-row justify-content-around text-center">
                        <a class="p-5 m-1 fixed-size text-white rounded" id="card1" href="{{ route('register') }}">Usuarios</a>
                        <a class="p-5 m-1 fixed-size text-white rounded" id="card2" href="{{ route('index.vehicles') }}">Vehiculos</a>
                        <a class="p-5 m-1 fixed-size bg-dark rounded text-white" href="{{ route('register') }}">Polizas</a>
                    </div>

                    <div class="d-flex flex-row justify-content-around text-center text-white">
                        <a class="p-5 m-1 fixed-size bg-dark rounded text-white" href="{{ route('register') }}">Precios</a>
                        <a class="p-5 m-1 fixed-size bg-dark rounded text-white" href="{{ route('register') }}">Consultas de pago</a>
                        <a class="p-5 m-1 fixed-size bg-dark rounded text-white" href="{{ route('register') }}">Puestos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
