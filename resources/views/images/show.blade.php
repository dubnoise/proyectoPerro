@extends('layout')

@section('titulo', $image->title)

@section('contenido')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/image.css') }}">
@endsection

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
        <!-- Botón JS -->
        <button class="btn-like-js"
                data-like-url="{{ route('images.toggle_like', $image->id) }}"
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

    <!-- SCRIPT para AJAX like -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const likeBtn = document.querySelector('.btn-like-js');
    if (!likeBtn) return;

    likeBtn.addEventListener('click', async function (e) {
        // deshabilitar doble click
        likeBtn.disabled = true;

        const url = likeBtn.dataset.likeUrl;
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        try {
            const res = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({}) // no necesitamos datos extra
            });

            if (!res.ok) {
                const text = await res.text();
                console.error('Server error response:', res.status, text);
                throw new Error('Error del servidor');
            }

            const data = await res.json();

            if (data.status && data.status === 'ok') {
                // actualizar icono y contador
                const iconSpan = likeBtn.querySelector('.like-icon');
                const countSpan = likeBtn.querySelector('.like-count-js');

                countSpan.textContent = data.likes_count;

                if (data.liked) {
                    iconSpan.textContent = '❤️';
                    likeBtn.setAttribute('aria-pressed', 'true');
                } else {
                    iconSpan.textContent = '🤍';
                    likeBtn.setAttribute('aria-pressed', 'false');
                }
            } else {
                console.error('Unexpected response data:', data);
                alert('Error al enviar like. Intenta de nuevo.');
            }
        } catch (err) {
            console.error('Fetch error:', err);
            alert('Error al enviar like. Intenta de nuevo.');
        } finally {
            likeBtn.disabled = false;
        }
    });
});
</script>

</main>

@endsection
