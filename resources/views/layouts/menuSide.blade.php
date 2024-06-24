<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assetsDash/images/logo.svg" alt="logo" /></a>
      <a class="pt-3 pl-4 sidebar-brand brand-logo-mini" href="index.html"><img src="assetsDash/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="nav-profile-image">
            <img src="assetsDash/images/faces/face1.jpg" alt="profile" />
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="pr-3 nav-profile-text d-flex flex-column">
            <span class="mb-2 font-weight-medium">{{ Auth::user()->name }}</span>
            {{-- <span class="font-weight-normal">$8,753.00</span> --}}
          </div>
          <span class="ml-3 text-white rounded badge badge-danger">3</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('administrador')}}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Estadistica</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-account-multiple-outline menu-icon"></i>
          <span class="menu-title">Usuarios</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('list.titulados')}}">Listar <br>administradores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/dropdowns.html">Administrar <br>Titulados</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/icons/mdi.html">
          <i class="mdi mdi-contacts menu-icon"></i>
          <span class="menu-title">Ofertas de Trabajo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="mdi mdi-chart-line menu-icon"></i>
          <span class="menu-title">Encuestas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('encuesta.index')}}">Listar <br>Encuesta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('encuesta.create')}}">Crear <br>Encuestas</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item sidebar-actions">
        <div class="nav-link">
          <div class="mt-4">
            <div class="border-none">
              <p class="text-black">Opciones</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item">
                    <i class="mr-2 mdi mdi-logout text-primary"></i> salir
                </button>
            </form>
          </div>
        </div>
      </li>
    </ul>
  </nav>