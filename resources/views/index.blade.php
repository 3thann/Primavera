@extends('layout.app')

@section('content')

	<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/slide_1.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <h2>Primavera</h2>
                           <p><a href="#" class="btn btn-primary btn-lg">En savoir plus</a></p>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/slide_2.jpg);">
               <div class="container">
                   <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <h2>Seconde main</h2>
                           <p><a href="#" class="btn btn-primary btn-lg">En savoir plus</a></p>
                       </div>
                   </div>
               </div>
           </li>
           <li style="background-image: url(images/slide_3.jpg);">
               <div class="container">
                   <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <h2>Renaissance</h2>
                           <p><a href="#" class="btn btn-primary btn-lg">En savoir plus</a></p>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
	</aside>

	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Our Awesome Features</h2>
					<p>Text</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-laptop"></i>
						<div class="desc">
							<h3>Dashboard</h3>
							<p>Text</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-server"></i>
						<div class="desc">
							<h3>Administration</h3>
							<p>Text</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-money"></i>
						<div class="desc">
							<h3>Title</h3>
							<p>Text</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-work-section" class="fh5co-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Derniers projets</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_1.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Geographical App</h3>
								<h5 class="category">Web Application</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_2.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Geographical App</h3>
								<h5 class="category">User Interface</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 animate-box">
					<a href="#" class="item-grid text-center">
						<div class="image" style="background-image: url(images/image_3.jpg)"></div>
						<div class="v-align">
							<div class="v-align-middle">
								<h3 class="title">Geographical App</h3>
								<h5 class="category">Branded</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a href="#" class="btn btn-primary with-arrow">Voir plus de projets<i class="icon-arrow-right"></i></a></p>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading animate-box">
					<h2>Clients Feedback</h2>
					<p>Text</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-offset-0 to-animate">
					<div class="wrap-testimony animate-box">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person1.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Text"</p>
									</blockquote>
									<span>Athan Smith, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person2.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Text"</p>
									</blockquote>
									<span>Nathalie Kosley, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="images/person3.jpg" alt="user">
									</figure>
									<blockquote>
										<p>"Text"</p>
									</blockquote>
									<span>Yanna Kuzuki, via <a href="#" class="twitter">Twitter</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection