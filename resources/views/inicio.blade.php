@extends('welcome')

@section('content')
	<div class="container">
	  <div class="row">
	    <div class="col-sm">
	      <table class="table " style="margin-top: 70px">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Name</th>
			      <th scope="col">Descrition</th>
			       <th scope="col"></th>
			        <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach( $notas as $item )
			  	  <tr>
				      <th scope="row">{{$item->id}}</th>
				      <td>{{$item->name}}</td>
				      <td>{{$item->des}}</td>
				      <td><a href="{{route('edit',$item->id)}}" class="btn btn-primary">Editar</a></td>
				      <td>
				      	<form action="{{route('delete',$item->id)}}" method="POST" >
					      	@method('DELETE') 
					      	 @csrf
								  <button type="submit" class="btn btn-danger">Eliminar</button>
					      </form>
				      </td>
			      </tr>
			  	@endforeach 
			 
			  </tbody>
			</table>
			@if(session('delete'))
		      	<div class="alert alert-success mt-5" role="alert">
				  {{session('delete')}}
				</div>
		    @endif
			{{$notas->links()}}
	    </div>
	    <div class="col-sm">
	      <h3 class="text-center mb-4">Agregar Notas</h3>
	      <form action="{{route('store')}}" method="POST">
	      	 @csrf
	      		<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  				</div>
				<div class="form-group">
				    <label for="descrition">Descriton</label>
				    <input type="text" class="form-control" name="descrition" id="descrition">
				</div>
				  <button type="submit" class="btn btn-primary btn-block">Submit</button>
	      </form>
	      @if(session('add'))
	      	<div class="alert alert-success mt-5" role="alert">
			  {{session('add')}}
			</div>
	      @endif
	    </div>
	  </div>
	</div>
@endsection