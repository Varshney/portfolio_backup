@extends('layouts.app')

@section('content')
	<div class="col-sm-8 offset-sm-2">
		<h1 class="display-3">Add a Platform</h1>
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
			<form method="post" action="{{ route('platforms.store') }}">
				@csrf
				<div class="form-group">
					<label for="platform">Platform:</label>
					<input type="text" class="form-control" name="platform"/>
				</div>
				<div class="form-group">
					<label for="abbreviation">Abbreviation:</label>
					<input type="text" class="form-control" name="abbreviation" maxlength="10" />
				</div>
				<div class="form-group">
					<label for="colour">Colour:</label>
					<input type="color" class="form-control" name="colour"/>
				</div>
				<button type="submit" class="btn btn-primary">Add platform</button>
			</form>
		</div>
	</div>
@endsection