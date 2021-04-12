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
		<a style="margin: 19px;" href="{{ route('platforms.create')}}" class="btn btn-primary">New platform</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th>Platform</th>
			<th>Abbreviation</th>
			<th>Colour</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($platform as $platforms)
		<tr>
			<td>{{ $platforms->id }}</td>
			<td>{{ $platforms->platform }}</td>
			<td>{{ $platforms->abbreviation }}</td>
			<td>{{ $platforms->colour }}</td>
			<td><a href="{{ route('platforms.edit', $platforms->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('platforms.destroy', $platforms->id)}}" method="post">
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
