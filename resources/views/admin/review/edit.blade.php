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
<form method="post" action="{{ route('reviews.update', $review->id) }}">
	@method('PATCH') 
	@csrf
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="text" class="form-control" name="title" value="{{ $review->title }}" />
	</div>
	<div class="form-group">
		<label for="description">description:</label>
		<textarea type="text" class="form-control" name="description">{{ $review->description }}</textarea>
	</div>
	<div class="form-group">
		<label for="image">Image:</label>
		<input type="file" class="form-control" name="image" value="{{ $review->image_id }}" />
	</div>
	<div class="form-group">
		<label for="platform">platform:</label>
		<input type="text" class="form-control" name="platform" value="{{ $review->platform_id }}" />
	</div>

	@if (!$review->url)
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
					@if ($review->url_type == "http")
						selected
					@endif
				>http</option>
				<option value="https"
					@if ($review->url_type == "https")
						selected
					@endif
				>https</option>
			</select>
			<div class="form-group">
				<label for="url">URL:</label>
				<input type="text" class="form-control" name="url" value="{{ $review->url }}" />
			</div>
		</div>
	@endif
	<div class="form-group">
		<label for="date">Date:</label>
		<input type="date" class="form-control" name="date" value="{{ $review->date }}" />
	</div>
	<button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection