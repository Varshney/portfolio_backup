@extends('layouts.app')

@section('content')
	<div class="col-sm-8 offset-sm-2">
		<h1 class="display-3">Add a Social Platofrm</h1>
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
			<form method="post" action="{{ route('socials.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="social">Social Platform:</label>
					<input type="text" class="form-control" name="social"/>
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" class="form-control" name="image"/>
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
				<button type="submit" class="btn btn-primary">Add social platform</button>
			</form>
		</div>
	</div>
@endsection