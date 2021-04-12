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
			<form method="post" action="{{ route('tutorials.store') }}">
				@csrf
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="text" class="form-control" name="image"/>
				</div>
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" name="title"/>
				</div>
				<div class="form-group">
					<label for="category">Category:</label>
					<input type="text" class="form-control" name="category"/>
				</div>
				<div class="form-group">
					<label for="software">Software:</label>
					<input type="text" class="form-control" name="software"/>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<input type="text" class="form-control" name="description" maxlength="10" />
				</div>
				<div class="form-group">
					<label for="url">URL:</label>
					<input type="url" class="form-control" name="url"/>
				</div>
				<button type="submit" class="btn btn-primary">Add platform</button>
			</form>
		</div>
	</div>
@endsection