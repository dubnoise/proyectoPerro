@extends('layout')

@section('titulo', $image->title)

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/image.css') }}">
@endsection

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

        {{-- IMAGEN (click → fullscreen) --}}
        <img
            id="fullImage"
            src="{{ asset('uploads/' . $image->filename) }}"
            alt="{{ $image->title }}"
            class="fullscreen-img"
            onclick="toggleFullscreen()"
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

</main>

{{-- FULLSCREEN SCRIPT --}}
<script>
function toggleFullscreen() {
    const img = document.getElementById('fullImage');

    if (!document.fullscreenElement) {
        img.requestFullscreen().catch(err => console.error(err));
    } else {
        document.exitFullscreen();
    }
}

// --- script del botón like ---
document.addEventListener('DOMContentLoaded', function () {
    const likeBtn = document.querySelector('.btn-like-js');
    if (!likeBtn) return;

    likeBtn.addEventListener('click', async function () {
        likeBtn.disabled = true;

        const url = likeBtn.dataset.likeUrl;
        const token = document.querySelector('meta[name="csrf-token"]').content;

        try {
            const res = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({})
            });

            const data = await res.json();

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

        } catch (err) {
            alert('Error al enviar like.');
        } finally {
            likeBtn.disabled = false;
        }
    });
});
</script>

@endsection
