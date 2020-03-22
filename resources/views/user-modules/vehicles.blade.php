@extends('layouts.user-modules')

@section('module')	
	<table class="table table-dark text-center">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">id</th>
	      <th scope="col">Marca</th>
	      <th scope="col">Modelo</th>
	    </tr>
	  </thead>
	  <tbody>
		@foreach($vehicles as $vehicle)	
		    <tr>
		      <th scope="row">{{$counter = $counter + 1}}</th>
		      <td>{{$vehicle->id}}</td>
		      <td>{{$vehicle->marca}}</td>
		      <td>{{$vehicle->modelo}}</td>
		    </tr>
		@endforeach
	  </tbody>
	</table>

	{{-- <div class="container-fluid d-flex justify-content-center mt-2">{{$vehicles->links()}}</div> --}}

	<a class="btn btn-primary" href="{{route('user.register.vehicle')}}">Registrar vehiculo</a>

@endsection