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
		<a style="margin: 19px;" href="{{ route('reviews.create')}}" class="btn btn-primary">New Review</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th>Title</th>
			<th>Image</th>
			<th>Description</th>
			<th>Platform</th>
			<th>URL</th>
			<th>Date</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($review as $reviews)
		<tr>
			<td>{{ $reviews->id }}</td>
			<td>{{ $reviews->title }}</td>
			<td>{{ $reviews->image_id }}</td>
			<td>{{ $reviews->description }}</td>			
			<td>
				@foreach ($platform as $platforms)
					@if ($platforms->id == $reviews->platform_id)
					{{ $platforms->platform }}
					@endif
				@endforeach
			</td>
			<td>{{ $reviews->url_type }}://{{ $reviews->url }}</td>
			<td>{{ $reviews->date }}</td>
			<td><a href="{{ route('reviews.edit', $reviews->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('reviews.destroy', $reviews->id)}}" method="post">
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
