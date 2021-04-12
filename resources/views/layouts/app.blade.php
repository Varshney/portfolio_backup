<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ config('languages')[app()->getLocale()] }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (config('languages') as $lang => $language)
                                    @if ($lang !== app()->getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
						<!-- Authentication Links -->
						@guest
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link @if (request()->route()->getName() == 'admin.index') active @endif" href="{{ route("admin.index") }}">Admin Home (completed)</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (request()->route()->getName() == 'about.index') active @endif" href="{{ route("about.index") }}">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'categories.index'
					|| request()->route()->getName() == 'categories.create'
					|| request()->route()->getName() == 'categories.edit'
						) active
				@endif" href="{{ route("categories.index") }}">
					Categories
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'files.index'
					|| request()->route()->getName() == 'files.create'
					|| request()->route()->getName() == 'files.edit'
					) active
				@endif" href="{{ route("files.index") }}">
					{{ __("files")[app()->getLocale()] }}
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'images.index'
					|| request()->route()->getName() == 'images.create'
					|| request()->route()->getName() == 'images.edit'
					) active
				@endif" href="{{ route("images.index") }}">
					Images
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'platforms.index'
					|| request()->route()->getName() == 'platforms.create'
					|| request()->route()->getName() == 'platforms.edit'
					) active
				@endif" href="{{ route("platforms.index") }}">
					Platforms (completed)
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'projects.index'
					|| request()->route()->getName() == 'projects.create'
					|| request()->route()->getName() == 'projects.edit'
					) active
				@endif" href="{{ route("projects.index") }}">
					Projects
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'publications.index'
					|| request()->route()->getName() == 'publications.create'
					|| request()->route()->getName() == 'publications.edit'
					) active
				@endif" href="{{ route("publications.index") }}">
					Publications (completed)
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == 'reviews.index'
					|| request()->route()->getName() == 'reviews.create'
					|| request()->route()->getName() == 'reviews.edit'
					) active
				@endif" href="{{ route("reviews.index") }}">
					Reviews
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == "socials.index"
					|| request()->route()->getName() == "socials.create"
					|| request()->route()->getName() == "socials.edit"
					) active
				@endif" href="{{ route("socials.index") }}">
					!!!Social!!!
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == "software.index"
					|| request()->route()->getName() == "software.create"
					|| request()->route()->getName() == "software.edit"
					) active
				@endif" href="{{ route("software.index") }}">
					Software (completed)
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link @if (
					request()->route()->getName() == "tutorials.index"
					|| request()->route()->getName() == "tutorials.create"
					|| request()->route()->getName() == "tutorials.edit"
					) active
				@endif" href="{{ route("tutorials.index") }}">
					Tutorials
				</a>
			</li>
		</ul>
		<main class="py-4">
			@yield('content')
		</main>
	</div>
{{-- 	@if (request()->route()->getName() == "abouts.edit")
	@elseif (request()->route()->getName() == "categories.edit")
	@elseif (request()->route()->getName() == "files.edit")
	@elseif (request()->route()->getName() == "games.edit")
	@elseif (request()->route()->getName() == "images.edit")
	@elseif (request()->route()->getName() == "platforms.edit")
	@elseif (request()->route()->getName() == "projects.edit")
	@elseif (request()->route()->getName() == "publications.edit")
	@elseif (request()->route()->getName() == "reviews.edit")
	@elseif (request()->route()->getName() == "socials.edit")
	@elseif (request()->route()->getName() == "software.edit")
	@elseif (request()->route()->getName() == "tutorials.edit")
	@elseif (request()->route()->getName() == "register")
	@elseif (request()->route()->getName() == "home.index")
	@else
		@foreach ($social as $socials)
			<a href="{{ $socials->url_type }}://{{ $socials->url }}">{{ $socials->social }}</a>
		@endforeach
	@endif
 --}}</body>
</html>
