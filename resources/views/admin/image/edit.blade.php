@extends('layouts.app')

@section('content')
<div class="col-sm-8 offset-sm-2">
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
	<form method="post" action="{{ route('platforms.update', $platform->id) }}">
		@method('PATCH') 
		@csrf
		<div class="form-group">
			<label for="platform">Platform Name:</label>
			<input type="text" class="form-control" name="platform" value={{ $platform->platform }} />
		</div>
		<div class="form-group">
			<label for="abbreviation">Abbreviation:</label>
			<input type="text" class="form-control" name="abbreviation" value={{ $platform->abbreviation }} />
		</div>
		<div class="form-group">
			<label for="colour">Colour:</label>
			<input type="color" class="form-control" name="colour" value={{ $platform->colour }} />
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>
</div>
@endsection