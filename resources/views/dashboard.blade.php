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
                        <div class="p-5 m-1 bg-dark rounded"><a href="">text1</a></div>
                        <div class="p-5 m-1 bg-warning rounded"><a href="">text1</a></div>
                        <div class="p-5 m-1 bg-primary rounded"><a href="">text1</a></div>
                    </div>

                    <div class="d-flex flex-row justify-content-around text-center text-white">
                        <div class="p-5 m-1 bg-dark rounded"><a href="">text1</a></div>
                        <div class="p-5 m-1 bg-warning rounded"><a href="">text1</a></div>
                        <div class="p-5 m-1 bg-primary rounded"><a href="">text1</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
