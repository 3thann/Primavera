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
					<li class="header-bar-text"><a href="{{ route('generics.services') }}">Nos services</a></li>
					<li class="header-bar-text active"><a href="{{ route('generics.about') }}">À propos</a></li>
					<li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

	<div class="fh5co-about fh5co-light-grey-section animate-box">
		<div class="col-md-6 col-md-offset-3 mb-4 text-center fh5co-heading">
			<h2>Notre histoire</h2>
			<p>L'histoire de Prima Vera voit le jour en 2022 à Angers, avec une équipe de sept créateurs et développeurs prêts à s'engager pour proposer des solutions durables et responsables aux adeptes de mode, aux look excentriques et colorés. Comme expliqué ci-dessus, Primavera se base sur l'authenticité et la joie contestataire des années 60 avec la naissance de la mode hippie. Encore aujourd'hui, ce style vestimentaire intemporel est ouvert à tous, et Prima Vera deviendra le refuge de tous les esprits joyeux et contestataires.</p>
		</div>

		<div class="container">
			<div class="col-md-6 col-md-offset-3 text-center animate-box">
				<img src="images/image1.jpg" class="img-fluid" height="500px">
			</div>
		</div>

		<div class="container">
			<div class="col-md-6 col-md-offset-3 text-center animate-box" style="padding-top: 50px">
				<h2>Un nom, plusieurs significations...</h2>
				<p>Prima Vera, c’est avant tout un concept. Prima signifie «premier», faisant référence à «première fois», et «Vera», une référence au verbe «voir». Une nouvelle formulation pour l’expression «qui vivra verra». C’est une invitation au renouveau. Le mot «Primavera» désigne également «printemps» en espagnol. Une langue chantante, et une traduction faisant référence à l’identité visuelle de la marque, ainsi qu’à son inspiration Hippie. </p>
			</div>
		</div>
	</div>

	<div class="fh5co-team fh5co-light-section">
		<div class="container">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
						<h2>L'équipe</h2>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person1.jpg" class="img-responsive">
						<h3>Andréa Leblet</h3>
						<h4>PDG - DA</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person2.jpg" class="img-responsive">
						<h3>Anne Niamien</h3>
						<h4>Stratégie marketing & com</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person3.jpg" class="img-responsive">
						<h3>Amandine Bouvier</h3>
						<h4>Responsable stylisme/modelisme</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person3.jpg" class="img-responsive">
						<h3>Lilianne Mpunga</h3>
						<h4>Stylisme/modelisme</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person3.jpg" class="img-responsive">
						<h3>Vincent Hebert</h3>
						<h4>Responsable développeur & community manager</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff text-center animate-box">
						<img src="images/person3.jpg" class="img-responsive">
						<h3>Ethan Proutière</h3>
						<h4>Développeur</h4>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
		</div>
	</div>
	
@endsection
