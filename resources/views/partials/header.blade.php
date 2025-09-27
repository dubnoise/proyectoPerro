<div class="header">
    <a href="{{ route('home') }}">
        <div class="home">
            <img src={{asset('img/casa-de-perro.png')}} alt="home">
        </div>
    </a>

    <a href="{{ route('users.show', auth()->user()->id) }}">
        <div class="home">
            <img src={{asset('img/perro-perfil.png')}} alt="home">
        </div>
    </a>

    <a href="{{ route('info') }}">
        <div class="home">
            <img src={{asset('img/info.png')}} alt="home">
        </div>
    </a>

    <a href="{{ route('users.edit', auth()->user()->id) }}">
        <div class="home">
            <img src={{asset('img/editar-perfil.png')}} alt="home">
        </div>
    </a>

    <a href="{{ route('logout') }}">
        <div class="home">
            <img src={{asset('img/cerrar-sesion.png')}} alt="home">
        </div>
    </a>
</div>
