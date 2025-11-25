@extends('layout')

@section('titulo', $image->title)

@section('contenido')

<header>
    @include('partials.header')
</header>

<main class="full-image-container">

    {{-- BOTÓN VOLVER --}}
    <a href="{{ route('users.images', $user->id) }}" class="btn-back">← Volver</a>

    {{-- CONTENEDOR DE LA IMAGEN --}}
    <div class="image-viewer">

        {{-- FLECHA ANTERIOR --}}
        @if($prev)
        <a href="{{ route('images.show', $prev->id) }}" class="nav-arrow left-arrow">❮</a>
        @endif

        {{-- IMAGEN --}}
        <img
            id="fullImage"
            src="{{ asset('uploads/' . $image->filename) }}"
            alt="{{ $image->title }}"
            class="fullscreen-img"
        >

        {{-- FLECHA SIGUIENTE --}}
        @if($next)
        <a href="{{ route('images.show', $next->id) }}" class="nav-arrow right-arrow">❯</a>
        @endif
    </div>

    {{-- BARRA INFERIOR --}}
    <div class="image-info-bar">
        <span class="image-title">{{ $image->title }}</span>
        <span class="image-date">{{ $image->created_at->format('d/m/Y') }}</span>

       <div class="like-block">
            <!-- Fallback form para navegadores sin JS -->
            <form method="POST" action="{{ route('images.toggle_like', $image->id) }}" class="like-form-nojs">
                @csrf
                <button type="submit" class="btn-like nojs">
                    ❤️
                </button>
                <span class="like-count">{{ $image->likes_count ?? $image->likes()->count() }}</span>
            </form>

            <!-- Botón JS (mejor visual) -->
            <button class="btn-like-js"
                    data-image-id="{{ $image->id }}"
                    aria-pressed="{{ (isset($image->likes) && $image->likes->contains('user_id', auth()->id())) ? 'true' : 'false' }}">
                <span class="like-icon">
                    @if (isset($image->likes) && $image->likes->contains('user_id', auth()->id()))
                        ❤️
                    @else
                        🤍
                    @endif
                </span>
                <span class="like-count-js">{{ $image->likes_count ?? $image->likes()->count() }}</span>
            </button>
        </div>

    </div>

</main>

{{-- SCRIPT PARA FULLSCREEN + ZOOM + TECLAS --}}
<script>
    const img = document.getElementById('fullImage');
    let isFullscreen = false;

    // ENTRAR / SALIR DE FULLSCREEN AL CLICAR
    img.addEventListener('click', () => {
        if (!isFullscreen) {
            openFullscreen(img);
        } else {
            closeFullscreen();
        }
    });

    function openFullscreen(elem) {
        isFullscreen = true;
        elem.classList.add('zoomed');

        if (elem.requestFullscreen) elem.requestFullscreen();
        else if (elem.webkitRequestFullscreen) elem.webkitRequestFullscreen();
        else if (elem.msRequestFullscreen) elem.msRequestFullscreen();
    }

    function closeFullscreen() {
        isFullscreen = false;
        document.querySelector('.zoomed')?.classList.remove('zoomed');

        if (document.exitFullscreen) document.exitFullscreen();
        else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
    }

    // NAVEGACIÓN CON TECLADO
    document.addEventListener('keydown', (e) => {
        if (e.key === "ArrowRight") {
            let next = document.querySelector('.right-arrow');
            if (next) window.location = next.href;
        }
        if (e.key === "ArrowLeft") {
            let prev = document.querySelector('.left-arrow');
            if (prev) window.location = prev.href;
        }
        if (e.key === "Escape") {
            closeFullscreen();
        }
    });
</script>

@endsection
