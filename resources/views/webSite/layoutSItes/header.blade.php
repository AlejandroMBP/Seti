<div id="navigation" class="navbar-light bg-faded site-navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-20 align-self-center">
                <div class="site-logo">
                    <a href="{{route('inicio')}}"><img src="assets/img/logo.svg" alt=""></a>          				
                </div>
            </div><!--- END Col -->
            
            <div class="col-60 d-flex justify-content-center">
                <nav id="main-menu">
                    <ul>
                        <li class="{{ request()->routeIs('inicio') ? 'current' : '' }}"><a href="{{route('inicio')}}">Inicio</a></li>							  				  
                        <li class="{{ request()->routeIs('profesionales') ? 'current' : '' }}"><a href="{{route('profesionales')}}">Profesionales</a></li>
                        <li class="{{ request()->routeIs('ofertas') ? 'current' : '' }}"><a href="{{route('ofertas')}}">Ofertas</a></li>	
                        <li class="{{ request()->routeIs('servicioTec') ? 'current' : '' }}"><a href="{{route('servicioTec')}}">Servio Tecnico</a></li>
                    </ul>
                </nav>
            </div><!--- END Col -->
            
            <div class="col-20 d-none d-xl-block text-end align-self-center">
                {{-- <a href="#" class="header-btn">Sign In</a> --}}
                @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="border-btn">Menu</a>
                    @else
                        <a href="{{ route('login') }}" class="border-btn">Ingresar</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
                {{-- <a href="#" class="border-btn">Ingresar</a> --}}
            </div><!--- END Col -->
            
            <ul class="mobile_menu">						
                <li><a href="{{route('inicio')}}">Inicio</a></li>							  				  
                <li><a href="{{route('profesionales')}}">Profesionales</a></li>
                <li><a href="{{route('ofertas')}}">Ofertas</a></li>	
                <li><a href="{{route('servicioTec')}}">Servio Tecnico</a></li>
            </ul>			
        </div><!--- END ROW -->
    </div><!--- END CONTAINER -->
</div> 