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
		<a style="margin: 19px;" href="{{ route('socials.create')}}" class="btn btn-primary">New social</a>
	</div>  
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th>Social Platform</th>
			<th width="50%">URL</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($social as $socials)
		<tr>
			<td>{{ $socials->id }}</td>
			<td>{{ $socials->social }}</td>
			<td>{{ $socials->url_type }}://{{ $socials->url }}</td>
			<td><a href="{{ route('socials.edit', $socials->id) }}" class="btn btn-primary">Edit</a></td>
			<td>
				<form action="{{ route('socials.destroy', $socials->id)}}" method="post">
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
