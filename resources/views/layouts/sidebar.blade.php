<nav class="flex-row navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex">
	<div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
	  <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assetsDash/images/logo-mini.svg" alt="logo" /></a>
	  {{-- boton para minimizar el menu --}}
	  <button class="mr-2 navbar-toggler align-self-center" type="button" data-toggle="minimize">
		<i class="mdi mdi-menu"></i>
	  </button>
	  {{-- fin del menu --}}
	  {{-- barra de navegacion del usuario --}}
	  @include('layouts.navigation')
	  {{-- fin de la barra de navegacion --}}
	  
	</div>
  </nav>