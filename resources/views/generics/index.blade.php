@extends('layout.app')

@section('content')

	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="header-inner">
				<h1><a href="{{ route('generics.index') }}">Prima Vera</a></h1>
				<nav role="navigation">
					<ul>
						<li class="header-bar-text active"><a href="{{ route('generics.index') }}">Accueil</a></li>
						<li class="header-bar-text"><a href="{{ route('project.index') }}">Nos projets</a></li>
						<li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
						<li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<div class="animate-box">
		<div class="col-md-6 col-md-offset-3 mt-5 mb-4 text-center">
			<h2>Notre galerie</h2>
		</div>
	</div>
	
	<div class="container d-flex justify-content-center animate-box">

		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
		
			@foreach ($images as $image)
				@if ($image->id == 1)
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $image->id }}" class="active" aria-current="true" aria-label="Slide {{ $image->id }}"></button>
				@else
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $image->id }}" aria-label="Slide {{ $image->id }}"></button>
				@endif
			@endforeach

		  </div>

			@foreach ($images as $image)
				@if ( $image->id == 1)
					<div class="carousel-item active">
				@else
					<div class="carousel-item">
				@endif
						<img src="images/{{ $image->link }}" height="600px" width="auto">
			    	</div>
			@endforeach

		  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
	</div>

	<div class="animate-box">
		<div class="col-md-6 col-md-offset-3 mb-4 text-center fh5co-heading">
			<img src="images/logo_couleurs.jpg" height="400px" width="auto">
			<h2>Notre histoire</h2>
			<p>L'histoire de Prima Vera voit le jour en 2022 à Angers, avec une équipe de sept créateurs et développeurs prêts à s'engager pour proposer des solutions durables et responsables aux adeptes de mode, aux look excentriques et colorés. Comme expliqué ci-dessus, Primavera se base sur l'authenticité et la joie contestataire des années 60 avec la naissance de la mode hippie. Encore aujourd'hui, ce style vestimentaire intemporel est ouvert à tous, et Prima Vera deviendra le refuge de tous les esprits joyeux et contestataires.</p>
		</div>
	</div>

@endsection