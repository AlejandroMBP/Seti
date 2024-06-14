@extends('webSite.app')

@section('title', 'Servicio Tecnico')

@section('content')
<!-- START Main Banner -->
<section class="main-banner">		
    <div class="container">			
        <div class="row">
            <div class="col-xl-6 align-self-center wow fadeIn">
                <div class="main_banner_content">					
                    <span>Contact</span>						
                    <h4>Please use Contact Form   <br>
                    In Bellow</h4>
                    <div class="ba_shape">	
                        <svg fill="none" viewBox="0 0 16 141"><path fill="#fff" d="M10.387 11.014l4.886-9.945L3.727.939l4.66 10.053 2 .022zm-3.17 129.69a1 1 0 001.414.016l6.436-6.292a1 1 0 10-1.399-1.43l-5.72 5.592-5.592-5.72a1 1 0 00-1.43 1.398l6.291 6.436zM8.4 9.992L6.932 139.993l2 .023 1.466-130.002-2-.022z"/></svg>
                    </div>
                </div>
            </div><!-- End Col -->
        </div>
        
    </div>

    
    <div class="bashape_1">
        <img src="assets/img/shapes/banner-shape1.svg" alt="shape">
    </div>				
    
    <div class="bashape_2">
        <img src="assets/img/shapes/star-1.svg" alt="shape">
    </div>	
    
    <div class="bashape_3">
        <img src="assets/img/shapes/star-2.svg" alt="shape">
    </div>			
    
</section>
<!-- END Main Banner -->
        
<!-- START Contact -->
<section class="contact section-padding">			
    <div class="container">	
        <div class="row">
            <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                <div class="contact-info">	
                    <div class="cicon">
                        <i class='bx bx-phone-call'></i>
                    </div>
                    <h4>Phone Number</h4>
                    <p>+88987 58 62 54</p>
                </div>
            </div><!-- END Col -->	

            <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                <div class="contact-info">	
                    <div class="cicon">
                        <i class='bx bxs-envelope' ></i>
                    </div>
                    <h4>Email Address</h4>
                    <p>example@portfx.com</p>
                </div>
            </div><!-- END Col -->
            
            <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                <div class="contact-info">	
                    <div class="cicon">
                        <i class='bx bx-current-location' ></i>
                    </div>
                    <h4>Office Address</h4>
                    <p>9170 OULED AYOUNI </p>
                </div>
            </div><!-- END Col -->	
            
            <div class="col-xl-3 col-md-6 col-12 wow fadeIn">
                <div class="contact-info">	
                    <div class="cicon">
                        <i class='bx bx-time-five' ></i>
                    </div>
                    <h4>Working Hours</h4>
                    <p>08 AM - 9 PM</p>
                </div>
            </div><!-- END Col -->
            
            <div class="mx-auto col-xl-8 col-12 pt60 wow fadeIn">
                <h3 class="ctitle">Get In Touch</h3>
                <div class="contact-form">
                    <form action="contact.php" method="get">
                        <p>
                            <input type="text" name="name" class="form-control" placeholder="What’s Your Name ?">
                        </p>	

                        <p>
                            <input type="email" name="email" class="form-control" placeholder="What’s  Your Email Address ?">
                        </p>
                        
                        <p>
                            <input type="phone" name="phone" class="form-control" placeholder="What’s Your Phone No ?">
                        </p>
                        
                        <p>
                            <span class="flabel">What type of Services you are looking for ?</span>
                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>Web Design</label>
                            </span>	

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>Web Development</label>
                            </span>	

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>SEO</label>
                            </span>	

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>Branding</label>
                            </span>	

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>Printing</label>
                            </span>	

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>UI / UX</label>
                            </span>

                            <span class="single-ropt">
                                <input type="checkbox" value="Web Design">
                                <label>Others</label>
                            </span>
                        </p>
                        
                        <p>
                            <select class="form-control">
                                <option>Select Budget Here</option>
                                <option>$250</option>
                                <option>$480</option>
                                <option>$1000</option>
                            </select>
                        </p>	

                        <p>
                            <input type="text" name="message" class="form-control" placeholder="Tell Me About your Project ?">
                        </p>
                        
                        <p class="text-center">
                            <input type="submit" id="submit" value="Submit Message">
                        </p>
                    </form>
                </div>
            </div><!-- END Col -->
        </div>
    </div>			
</section>
<!-- END Contact -->


<!-- Start Call To Action -->		
<div class="container text-center call-to-action mb160" style="background-image: url(assets/img/bg/newsletter.svg);">
    <h2>Let's Start Creating together</h2>
    <a href="#" class="border-btn-2">Hire Me</a>
</div>	
<!-- End Call To Action -->
@endsection