@extends('layout.app')

@section('content')

	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{ route('generics.index') }}">Prima Vera</a></h1>
				<nav role="navigation">
					<ul>
						<li class="header-bar-text"><a href="{{ route('generics.index') }}">Accueil</a></li>
						<li class="header-bar-text active"><a href="{{ route('project.index') }}">Nos projets</a></li>
						<li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
						<li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				@foreach ($projects as $project)

					<div class="col-md-4 animate-box">
						<a href="{{ route('project.show', $project->id) }}" class="item-grid text-center">
							<div class="image" style="background-image: url(images/{{ $project->image }})"></div>
							<div class="v-align">
								<div class="v-align-middle">
									<h3 class="title">{{ $project->name }}</h3>
									<h5 class="category">{{ $project->category }}</h5>
								</div>
							</div>
						</a>
					</div>

				@endforeach
			</div>
		</div>
	</div>
	
@endsection