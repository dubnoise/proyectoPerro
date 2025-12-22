<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header class="glass-header">
  <nav class="header-nav">

    {{-- HOME --}}
    <a href="{{ route('home') }}" class="nav-item">
      <img src="{{ asset('img/casa-de-perro.png') }}" alt="Inicio">
    </a>

    @auth
      {{-- PERFIL DEL USUARIO LOGUEADO --}}
      <a href="{{ route('users.show', auth()->user()->username) }}" class="nav-item">
        <img src="{{ asset('img/perro-perfil.png') }}" alt="Perfil">
      </a>

      {{-- INFO --}}
      <a href="{{ route('info') }}" class="nav-item">
        <img src="{{ asset('img/info.png') }}" alt="Info">
      </a>

      {{-- SUBIR IMAGEN --}}
      <a href="{{ route('images.create') }}" class="nav-item upload-btn">
        <img src="{{ asset('img/subir-imagen.png') }}" alt="Subir imagen">
      </a>

      {{-- EDITAR PERFIL --}}
      <a href="{{ route('users.edit', auth()->user()) }}" class="nav-item">
        <img src="{{ asset('img/editar-perfil.png') }}" alt="Editar perfil">
      </a>

      {{-- LOGOUT --}}
      <a href="{{ route('logout') }}" class="nav-item">
        <img src="{{ asset('img/cerrar-sesion.png') }}" alt="Cerrar sesión">
      </a>
    @endauth

  </nav>
</header>
