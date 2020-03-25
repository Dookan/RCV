@extends('layouts.admin-modules')

@section('module')	
	{{-- <table class="table table-dark text-center">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">ID</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Fecha de Ingreso</th>
	      <th scope="col">Acciones</th>	    
	    </tr>
	  </thead>
	  <tbody>
		@foreach($users as $user)
			@if(!$user->deleted_at)
		    <tr>
		      <th scope="row">{{$counter = $counter + 1}}</th>
		      <td>{{$user->id}}</td>
		      <td>{{$user->name}}</td>
		      <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
  		      <td>
  		      	<form action="/admin/delete-user/{{$user->id}}" method="POST">
  		      		@csrf
  		      		@method('DELETE')
  		      		<button type="submit" class="btn btn-danger">Eliminar</button>	
  		    	</form>
  		      </td>
		    </tr>
		    @endif
		@endforeach
	  </tbody>
	</table> --}}

	{{-- <div class="container-fluid d-flex justify-content-center mt-2">{{$vehicles->links()}}</div> --}}

	<a class="btn btn-primary" href="{{ route('register.price')}}">Nuevo Precio</a>

@endsection