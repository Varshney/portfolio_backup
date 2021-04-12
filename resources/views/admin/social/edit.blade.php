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
<form method="post" action="{{ route('socials.update', $social->id) }}">
	@method('PATCH') 
	@csrf
	<div class="form-group">
		<label for="social">Social Platform:</label>
		<input type="text" class="form-control" name="social" value="{{ $social->social }}" />
	</div>
	<div class="form-group">
		<label for="image">Image:</label>
		<input type="file" class="form-control" name="image" value="{{ $social->image_id }}" />
	</div>
	@if (!$social->url)
		<div class="form-group">
			<label for="url_type">URL Type:</label>
			<select name="url_type">
				<option value="http" selected>http</option>
				<option value="https">https</option>
			</select>
		</div>
		<div class="form-group">
			<label for="url">URL:</label>
			<input type="text" class="form-control" name="url"/>
		</div>
	@else
		<div class="form-group">
			<label for="url_type">URL Type:</label>
			<select name="url_type">
				<option value="http"
					@if ($social->url_type == "http")
						selected
					@endif
				>http</option>
				<option value="https"
					@if ($social->url_type == "https")
						selected
					@endif
				>https</option>
			</select>
			<div class="form-group">
				<label for="url">URL:</label>
				<input type="text" class="form-control" name="url" value="{{ $social->url }}" />
			</div>
		</div>
	@endif
	<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection