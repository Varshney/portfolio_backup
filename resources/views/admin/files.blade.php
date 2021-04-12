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
		<a style="margin: 19px;" href="{{ route('files.create')}}" class="btn btn-primary">New file</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($file as $files)
		<tr>
			<td>{{ $files->id }}</td>
			<td><a href="{{ route('files.edit', $files->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('files.destroy', $files->id)}}" method="post">
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
