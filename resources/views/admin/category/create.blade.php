@extends('layouts.app')

@section('content')
	<div class="col-sm-8 offset-sm-2">
		<h1 class="display-3">Add a Category</h1>
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
			<form method="post" action="{{ route('categories.store') }}">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" name="name"/>
				</div>
				<div class="form-group">
					<label for="parent">Parent:</label>
					<input type="text" class="form-control" name="parent" maxlength="10" />
				</div>
				<button type="submit" class="btn btn-primary">Add category</button>
			</form>
		</div>
	</div>
@endsection