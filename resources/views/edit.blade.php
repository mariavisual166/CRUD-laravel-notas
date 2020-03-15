@extends('welcome')

@section('content')
	<div class="container">
	  <div class="row"> 
	    <div class="col-sm">
	      <h3 class="text-center mb-4">Editar Notas {{$notas->id}}</h3>
	      <form action="{{route('update',$notas->id)}}" method="POST" >
	      	@method('PUT') 
	      	 @csrf
	      		<div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" value="{{$notas->name}}" name="name" id="name" aria-describedby="emailHelp">
  				</div>
				<div class="form-group">
				    <label for="descrition">Descriton</label>
				    <input type="text" class="form-control" value="{{$notas->des}}" name="descrition" id="descrition">
				</div>
				  <button type="submit" class="btn btn-primary btn-block">Submit</button>
	      </form>
	      @if(session('edit'))
	      	<div class="alert alert-success mt-5" role="alert">
			  {{session('edit')}}
			</div>
	      @endif
	    </div>
	  </div>
	</div>
@endsection