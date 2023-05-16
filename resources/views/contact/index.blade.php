@extends('layout.app')

@section('content')

<header id="fh5co-header" role="banner">
	<div class="container">
		<div class="header-inner">
			<h1><a href="{{ route('generics.index') }}">Prima Vera</a></h1>
			<nav role="navigation">
				<ul>
					<li class="header-bar-text"><a href="{{ route('generics.index') }}">Accueil</a></li>
					<li class="header-bar-text"><a href="{{ route('project.index') }}">Nos projets</a></li>
					<li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
					<li class="header-bar-text active"><a href="{{ route('contact.index') }}">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Information de contact</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Centre Pierre Cointreau CCI, 132 Av. de Lattre de Tassigny, 49000 Angers</li>
						<li><i class="icon-phone"></i><a href="tel:">+33 6 13 12 15 53</li>
						<li><i class="icon-envelope"></i><a href="#">primavera.reborn@gmail.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.primavera.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="col-md-8 col-md-offset-2 col-md-push-1 animate-box">
						<h2>Formulaire de contact</h2>
						<div class="row">
							<form action="{{ route('contact.store') }}" method="POST">
								@csrf
								<div class="col-md-6">
									<div class="form-group">
										<input name="name" class="form-control" placeholder="Nom" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input name="email" class="form-control" placeholder="Email" type="text" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" cols="30" rows="7" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input value="Envoyer le message" class="btn btn-primary" type="submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
@endsection