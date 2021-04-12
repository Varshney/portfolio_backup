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
		<a style="margin: 19px;" href="{{ route('software.create')}}" class="btn btn-primary">New software</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th width="50px">Version</th>
			<th>Name</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($software as $apps)
		<tr>
			<td>{{ $apps->id }}</td>
			<td>
				@if ($apps->version != NULL)
				v{{ $apps->version }}
				@else
				-
				@endif
			</td>
			<td>{{ $apps->name }}</td>
			<td><a href="{{ route('software.edit', $apps->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('software.destroy', $apps->id)}}" method="post">
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
