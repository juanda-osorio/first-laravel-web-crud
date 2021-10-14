<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">
        Motorbikes
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ request()->routeIs('motos.index') ? 'active' : '' }}" href="{{route('motos.index')}}">Mis Motos</a>
          <a class="nav-link {{ request()->routeIs('contactanos.index') ? 'active' : '' }}" href="{{route('contactanos.index')}}">Contáctanos</a>
        </div>
      </div>
    </div>
  </nav>