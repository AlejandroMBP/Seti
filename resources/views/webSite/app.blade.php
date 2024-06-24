<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Seti</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- Icon CSS -->
		<link rel="stylesheet" href="assets/fonts/themify-icons.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="assets/css/line-awesome.css">
		<link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href="assets/css/jquery-simple-mobilemenu.css">
		<!--magnific-popup Css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!--animate Css-->
		<link rel="stylesheet" href="assets/css/animate.css">		
		<!--YouTubePopUp Css-->
        <link rel="stylesheet" href="assets/css/YouTubePopUp.css">	
		 <!--Slick Css-->
        <link rel="stylesheet" href="assets/css/slick.css">	
		<!--slick theme Css-->
		<link rel="stylesheet" href="assets/css/slick-theme.css">					
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">		
        
	</head>
	
    <body data-spy="scroll" data-offset="80">
	
		<!-- START PRELOADER --> 
		<div class="preloader">
			<span class="loader"></span>
		</div>	
		<!-- END PRELOADER -->	

		<!-- START NAVBAR --> 
        @include('webSite.layoutSItes.header') 	  
		<!-- END NAVBAR -->
        <main>
            @if (session('especial'))
              <div class="alert alert-success">
                {{ session('especial') }}
              </div>
            @endif
            @yield('content')
        </main>
        <!-- START FOOTER -->
		@include('webSite.layoutSItes.footer')
		<!-- END FOOTER -->	

    </body>
    <!-- Latest jQuery -->
    <script src="assets/js/jquery.min.js" ></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery-simple-mobilemenu.min -->
    <script src="assets/js/jquery-simple-mobilemenu.js"></script>
    <!-- imagesloaded.pkgd -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- masonry -->
    <script src="assets/js/masonry.pkgd.min.js" ></script>			
    <!-- modernizer JS -->		
    <script src="assets/js/modernizr-2.8.3.min.js"></script>																	
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- waypoints -->
    <script src="assets/js/waypoints.min.js"></script>		
    <!-- counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- jquery appear js -->			
    <script src="assets/js/jquery.appear.js"></script>
    <!-- magnific-popup js -->	
    <script src="assets/js/jquery.magnific-popup.js"></script>	
    <!-- YouTubePopUp js -->		
    <script src="assets/js/YouTubePopUp.jquery.js"></script>
    <!-- yvpopup-active js -->		
    <script src="assets/js/yvpopup-active.js"></script>		
    <!-- scrolltopcontrol js -->
    <script src="assets/js/scrolltopcontrol.js"></script>	
    <!-- Wow js -->			
    <script src="assets/js/wow.js"></script>		
    <!-- slick js -->			
    <script src="assets/js/slick.js"></script>									
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
    
</html>