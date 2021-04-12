@extends('layouts.app')

@section('content')
<div class="col-sm-8 offset-sm-2">
	<div class="col-sm-12">
		@if(session()->get('success'))
		<div class="alert alert-success">
			{{ session()->get('success') }}
		</div>
		@endif
	</div>
	<div>
		<a style="margin: 19px;" href="{{ route('games.create')}}" class="btn btn-primary">New game</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($game as $games)
		<tr>
			<td>{{ $games->id }}</td>
			<td><a href="{{ route('games.edit', $games->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('games.destroy', $games->id)}}" method="post">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
