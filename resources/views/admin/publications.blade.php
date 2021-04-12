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
		<a style="margin: 19px;" href="{{ route('publications.create')}}" class="btn btn-primary">New publication</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th width="100px">Image</th>
			<th>Publication</th>
			<th>URL</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($publication as $publications)
		<tr>
			<td>{{ $publications->id }}</td>
			<td>
				@if (!$publications->image_id)
				@else
					<img src="{{ $publications->image->image_path }}" width="100%">
				@endif
			</td>
			<td>{{ $publications->publication }}</td>
			<td>
				@if (!$publications->url)
				@else
					{{ $publications->url_type }}://{{ $publications->url }}
				@endif
			</td>
			<td><a href="{{ route('publications.edit', $publications->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('publications.destroy', $publications->id)}}" method="post">
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
