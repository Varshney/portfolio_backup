@extends('layouts.app')

@section('content')
	<div class="col-sm-8 offset-sm-2">
		<h1 class="display-3">Add a contact</h1>
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
			<form method="post" action="{{ route('software.store') }}">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" name="name"/>
				</div>
				<div class="form-group">
					<label for="version">Version:</label>
					<input type="text" class="form-control" name="version"/>
				</div>
				<button type="submit" class="btn btn-primary">Add software</button>
			</form>
		</div>
	</div>
@endsection