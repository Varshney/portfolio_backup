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
		<a style="margin: 19px;" href="{{ route('categories.create')}}" class="btn btn-primary">New category</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th>category</th>
			<th>parent</th>
			<th>order</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($category as $categories)
		<tr>
			<td>{{ $categories->id }}</td>
			<td>{{ $categories->category }}</td>
			<td>{{ $categories->parent }}</td>
			<td>{{ $categories->order }}</td>
			<td><a href="{{ route('categories.edit', $categories->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('categories.destroy', $categories->id)}}" method="post">
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
