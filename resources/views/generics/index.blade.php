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
						<li class="header-bar-text"><a href="{{ route('generics.services') }}">Nos services</a></li>
						<li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
						<li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

			{{-- <div class="row">

				<div class="col-md-12 text-center animate-box">
					<p><a href="{{ route('project.index') }}" class="btn btn-primary with-arrow">Voir plus de projets<i class="icon-arrow-right"></i></a></p>
				</div>
			</div> --}}
	
	<div class="container d-flex justify-content-center">
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
 			  {{-- <div class="carousel-inner">
 			    <div class="carousel-item active">
 			      <img src="images/image1.jpg" height="600px" width="auto">
 			    </div> --}}

				@foreach ($images as $image)
					@if ( $image->id == 1)
						<div class="carousel-item active">
					@else
						<div class="carousel-item">
					@endif
							<img src="images/{{ $image->link }}" height="600px" width="auto">
 			    		</div>
				@endforeach

 			  </div>

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
@endsection