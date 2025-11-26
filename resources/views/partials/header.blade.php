<link rel="stylesheet" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header class="glass-header">
    <nav class="header-nav">
        <a href="{{ route('home') }}" class="nav-item">
            <img src="{{ asset('img/casa-de-perro.png') }}" alt="home">
        </a>

        <a href="{{ route('users.show', auth()->user()->id) }}" class="nav-item">
            <img src="{{ asset('img/perro-perfil.png') }}" alt="perfil">
        </a>

        <a href="{{ route('info') }}" class="nav-item">
            <img src="{{ asset('img/info.png') }}" alt="info">
        </a>

        <a href="{{ route('images.create') }}" class="nav-item upload-btn">
            <img src="{{ asset('img/subir-imagen.png') }}" alt="subir imagen">
        </a>

        <a href="{{ route('users.edit', auth()->user()->id) }}" class="nav-item">
            <img src="{{ asset('img/editar-perfil.png') }}" alt="editar perfil">
        </a>

        <a href="{{ route('logout') }}" class="nav-item">
            <img src="{{ asset('img/cerrar-sesion.png') }}" alt="cerrar sesión">
        </a>
    </nav>
</header>

<!-- Separa el contenido para que NO quede debajo del header -->
<div class="header-spacing"></div>
