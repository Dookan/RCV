@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="card-body">
                    <!-- <h5 class="card-title">Title</h5> -->
                    <div class="d-flex flex-row justify-content-around text-center text-white">
                        <a class="p-5 m-1 fixed-size bg-dark rounded" href="/user/vehicles/{{$user_id}}">Vehiculos</a>
                        <a class="p-5 m-1 fixed-size bg-dark rounded" href="#">Vehiculos</a>
                        <a class="p-5 m-1 bg-dark rounded" href="{{ route('register') }}">Registrar Usuario</a>
                    </div>

                    <div class="d-flex flex-row justify-content-around text-center text-white">
                        <a class="p-5 m-1 bg-dark rounded" href="{{ route('register') }}">Registrar Usuario</a>
                        <a class="p-5 m-1 bg-dark rounded" href="{{ route('register') }}">Registrar Usuario</a>
                        <a class="p-5 m-1 bg-dark rounded" href="{{ route('register') }}">Registrar Usuario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
