@extends('layouts.admin-modules')

@section('module')	
	<table class="table table-dark text-center">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">ID</th>
	      <th scope="col">Marca</th>
	      <th scope="col">Modelo</th>
	      {{-- <th scope="col">Usuario</th>
	      <th scope="col">ID Usuario</th> --}}
	      <th scope="col">Acciones</th>	    
	    </tr>
	  </thead>
	  <tbody>
		@foreach($vehicles as $vehicle)
			@if(!$vehicle->deleted_at)
		    <tr>
		      <th scope="row">{{$counter = $counter + 1}}</th>
		      <td>{{$vehicle->id}}</td>
		      <td>{{$vehicle->marca}}</td>
		      <td>{{$vehicle->modelo}}</td>
		      {{-- <td>{{$vehicle->user->name}}</td>
		      <td>{{$vehicle->user->id}}</td> --}}
  		      <td>
  		      	<form action="/admin/delete-vehicle/{{$vehicle->id}}" method="POST">
  		      		@csrf
  		      		@method('DELETE')
  		      		<button type="submit" class="btn btn-danger">Eliminar</button>	
  		    	</form>
  		      </td>
		    </tr>
		    @endif
		@endforeach
	  </tbody>
	</table>

	{{-- <div class="container-fluid d-flex justify-content-center mt-2">{{$vehicles->links()}}</div> --}}

	<a class="btn btn-primary" href="{{ route('register.vehicle')}}">Registrar Vehiculo</a>

@endsection