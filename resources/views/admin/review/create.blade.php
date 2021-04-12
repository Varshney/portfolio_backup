@extends('layouts.app')

@section('content')
	<div class="col-sm-8 offset-sm-2">
		<h1 class="display-3">Add a Review</h1>
		<div>
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
			<form method="post" action="{{ route('reviews.store') }}">
				@csrf
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" name="title"/>
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control" name="image"/>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea class="form-control" name="description"/></textarea>
				</div>
				<div class="form-group">
					<label for="platform">Platform:</label>
					<select name="platform">
						@foreach ($platform as $platforms)
							<option value="{{ $platforms->id }}">{{ $platforms->platform }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="publication">Publication:</label>
					<select name="publication">
						@foreach ($publication as $publications)
							<option value="{{ $publications->id }}">{{ $publications->publication }}</option>
						@endforeach
					</select>
				</div>
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
				<div class="form-group">
					<label for="date">Date:</label>
					<input type="date" class="form-control" name="date"/>
				</div>
				<button type="submit" class="btn btn-primary">Add review</button>
			</form>
		</div>
	</div>
@endsection