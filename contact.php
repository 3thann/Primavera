<!DOCTYPE html>
<html class="no-js">
	<?php include('layout/head.php'); ?>

<body>
	<div id="fh5co-page">

	<?php include('layout/header.php'); ?>
	

	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Contact</h2>
		   					<p class="fh5co-lead">Contactez-nous</p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="fh5co-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
					<h2>Détails</h2>
					<p>Text.</p><br><br>

				</div>
				<div class="col-md-3">
					<h3>Info de contact.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>Centre Pierre Cointreau CCI, 132 Av. de Lattre de Tassigny, 49000 Angers</li>
						<li><i class="icon-phone"></i>+33 6 13 12 15 53</li>
						<li><i class="icon-envelope"></i><a href="#">primavera.reborn@gmail.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.primavera.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Nom" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Envoyer le message" class="btn btn-primary" type="submit">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
	
	<?php include('layout/footer.php'); ?>
	
	</div>
	
	<?php include('layout/import_js.php'); ?>

	</body>
</html>

