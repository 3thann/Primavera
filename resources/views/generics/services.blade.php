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
					<li class="header-bar-text active"><a href="{{ route('generics.services') }}">Nos services</a></li>
					<li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
					<li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

	
	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Our Awesome Features</h2>
					<p>A l'heure où le local et la mode éthique reprennent le dessus sur la fast fashion, Prima Vera se postionne comme une marque éco-responsable et artistique. Le concept ? Proposer de l'orginalité au travers de pièces de seconde main repensées de A à Z pour des collections en séries limitées.  Au-delà de sa collection,  la marque propose un service de réparation, pour les clients qui souhaiteraient redonner vie à leurs vêtements, plutôt que d’en racheter de nouveaux, ou de les recycler. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-laptop"></i>
						<div class="desc">
							<h3>Dashboard</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-server"></i>
						<div class="desc">
							<h3>Administration</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-money"></i>
						<div class="desc">
							<h3>Make Money</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-tablet"></i>
						<div class="desc">
							<h3>SEO Monitoring</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-line-chart"></i>
						<div class="desc">
							<h3>Online Marketing</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-pie-chart"></i>
						<div class="desc">
							<h3>Business Analytics</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row fh5co-services">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Our pleasure to serve you</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Strategy</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Explore</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Expertise</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
					<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
	
@endsection