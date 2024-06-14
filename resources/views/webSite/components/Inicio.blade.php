
@extends('webSite.app')

@section('title', 'Página de Inicio')

@section('content')
   
		<!-- START Home Banner -->
		<section class="home-banner" style="background-image: url('assets/img/banner.jpg');">		
			<div class="container">			
				<div class="row">
					<div class="col-xl-6 col-lg-12 col-12 align-self-center">
						<div class="home_banner_content">					
							<h3 class="wow fadeInUp">Hola soy marcos!</h3>
							<h2 class="wow fadeInUp">A UI/UX <span>Designer</span></h2>
							<p class="wow fadeInDown">
								Solution-oriented mindset, problem-solving enthusiasm, positive attitude 
								towards challenges, overcoming obstacles with enthusiasm .
							</p>
							<a href="#" class="yellow_btn wow fadeInLeft">Hire Me</a>
							<a href="#" class="normal_btn wow fadeInRight">Download CV</a>
						</div>
					</div><!-- End Col -->
				</div>
			</div>
			
			<div class="about-con">
				<img src="assets/img/icons/about-icon.svg" alt="about-icon">
			</div>
			
			<div class="social_link">
				<ul>
					<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
					<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
					<li><a href="#"><i class='bx bxl-pinterest'></i></a></li>
					<li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
					<li><a href="#"><i class='bx bxl-dribbble'></i></a></li>
				</ul>
			</div>
			<div class="bshape_1">
				<img src="assets/img/bg/bshape1.svg" alt="shape">
			</div>			
			
			<div class="bshape_2">
				<img src="assets/img/bg/bshape2.svg" alt="shape">
			</div>			
			
			<div class="bshape_3">
				<img src="assets/img/bg/bshape3.svg" alt="shape">
			</div>
		</section>
		<!-- END Main Banner -->
		<!-- START Counter -->
		<section class="counter section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12 wow fadeIn">
						<div class="single-counter">
							<h4>5.4</h4><span>k</span>
							<p>Projects Completed</p>
						</div>
					</div><!-- END Col -->					
					
					<div class="col-xl-3 col-sm-6 col-12 wow fadeIn">
						<div class="single-counter">
							<h4>70</h4><span>k</span>
							<p>Happy Clients</p>
						</div>
					</div><!-- END Col -->	
					
					<div class="col-xl-3 col-sm-6 col-12 wow fadeIn">
						<div class="single-counter">
							<h4>99.00</h4><span>%</span>
							<p>Success Rate</p>
						</div>
					</div><!-- END Col -->					
					
					<div class="col-xl-3 col-sm-6 col-12 wow fadeIn">
						<div class="single-counter">
							<h4>12</h4><span>+</span>
							<p>Years Experience</p>
						</div>
					</div><!-- END Col -->
				</div>
			</div>
		</section>
		<!-- END Counter -->
		<!-- START Services -->
		
		<!-- END Services -->	
		<!-- START Testimonials -->
			
		<!-- START Testimonials -->	
		<!-- Start Call To Action -->
		
		<div class="container text-center call-to-action mb160" style="background-image: url(assets/img/bg/newsletter.svg);">
			<h2>Let's Start Creating together</h2>
			<a href="#" class="border-btn-2">Hire Me</a>
		</div>	
		<!-- End Call To Action -->
		
@endsection			
 