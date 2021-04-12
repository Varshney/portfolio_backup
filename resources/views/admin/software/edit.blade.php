@extends('layouts.app')

@section('content')
@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	<br />
@endif
<form method="post" action="{{ route('software.update', $software->id) }}">
	@method('PATCH') 
	@csrf
	<div class="form-group">
		<label for="name">Software Name:</label>
		<input type="text" class="form-control" name="name" value={{ $software->name }} />
	</div>
	<div class="form-group">
		<label for="version">Software Version:</label>
		<input type="text" class="form-control" name="version" value={{ $software->version }} />
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection