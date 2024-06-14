<ul class="navbar-nav navbar-nav-right ml-lg-auto">
    <li class="border-0 nav-item nav-profile dropdown">
      <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
        <img class="mr-2 nav-profile-img" alt="" src="assetsDash/images/faces/face1.jpg" />
        <span class="profile-name">{{ Auth::user()->name }}</span>
      </a>
      <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
        <a class="dropdown-item" href="{{route('profile.edit')}}">
          <i class="mr-2 mdi mdi-cached text-success"></i> Editar </a>
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">
                  <i class="mr-2 mdi mdi-logout text-primary"></i> salir
              </button>
          </form>
      </div>
    </li>
  </ul>