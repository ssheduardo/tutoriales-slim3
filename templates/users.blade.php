@extends('app')
@section('content')
<h2>Usuarios</h2>
	@if(is_array($all))
		<div class="row">
			@foreach($all as $user)
				<div class="col-md-8">
					{{$user['nombre']}} {{$user['apellidos']}}
                </div>
			@endforeach
        </div>
	@endif
@endsection