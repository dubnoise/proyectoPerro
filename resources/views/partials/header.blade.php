<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<!-- resources/views/partials/header.blade.php -->
<header class="glass-header" role="banner" aria-label="Main header">
  <nav class="header-nav" role="navigation" aria-label="Main navigation">
    <a href="{{ route('home') }}" class="nav-item" title="Inicio">
      <img src="{{ asset('img/casa-de-perro.png') }}" alt="Inicio">
    </a>

    <a href="{{ route('users.show', auth()->user()->id) }}" class="nav-item" title="Perfil">
      <img src="{{ asset('img/perro-perfil.png') }}" alt="Perfil">
    </a>

    <a href="{{ route('info') }}" class="nav-item" title="Información">
      <img src="{{ asset('img/info.png') }}" alt="Info">
    </a>

    <a href="{{ route('images.create') }}" class="nav-item upload-btn" title="Subir imagen">
      <img src="{{ asset('img/subir-imagen.png') }}" alt="Subir imagen">
    </a>

    <a href="{{ route('users.edit', auth()->user()->id) }}" class="nav-item" title="Editar perfil">
      <img src="{{ asset('img/editar-perfil.png') }}" alt="Editar perfil">
    </a>

    <a href="{{ route('logout') }}" class="nav-item" title="Cerrar sesión">
      <img src="{{ asset('img/cerrar-sesion.png') }}" alt="Cerrar sesión">
    </a>
  </nav>
</header>
