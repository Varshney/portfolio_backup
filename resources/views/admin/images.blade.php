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
		<a style="margin: 19px;" href="{{ route('images.create')}}" class="btn btn-primary">New image</a>
	</div>
	<div style="display:flex; flex-flow: row wrap;">
		@foreach ($image_name as $images)
		<div style="width: 150px; margin: 5px; padding: 5px; background-color: #999;">
			<div style="margin: 0 0 5px 0"><img style="width: 100%; height: 100%; object-fit: contain;" src="{{ $images->image_path }}"></div>
			<div style="text-align: center; width: 100%; cursor: default; background-color: #ccc; margin: 0 0 5px 0" class="btn">{{ $images->id }} - {{ $images->mime_type }}</div>
			<div style="text-align: center; margin: 0 0 5px 0"><a href="{{ route('images.edit', $images->id) }}" class="btn btn-primary" style="width: 100%;">Edit</a></div>
			<div style="text-align: center;">
				<form action="{{ route('images.destroy', $images->id)}}" method="post">
					@csrf
					@method('DELETE')
					<button style="width: 100%;" class="btn btn-danger" type="submit">Delete</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>
	<table class="table table-striped">
		<tr>
			<th width="50px">ID</th>
			<th width="100px">ID</th>
			<th>Mime Type</th>
			<th width="50px"></th>
			<th width="50px"></th>
		</tr>
		@foreach ($image_name as $images)
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>
				
			</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection
