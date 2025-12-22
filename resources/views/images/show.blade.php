@extends('layout')

@section('titulo', $image->title)

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/image.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<main class="image-page">

    {{-- ============================================================
         BOTÓN VOLVER
       ============================================================ --}}
    <a href="{{ route('users.images', $user->username) }}" class="btn-back">← Volver</a>



    {{-- ============================================================
         VISOR DE IMAGEN
       ============================================================ --}}
    <section class="viewer-wrapper">

        {{-- FLECHA ANTERIOR --}}
        @if($prev)
            <a href="{{ route('images.show', $prev->id) }}" class="nav-arrow left-arrow">❮</a>
        @endif

        {{-- IMAGEN --}}
        <div class="image-box">
            <img
                id="fullImage"
                src="{{ asset('uploads/' . $image->filename) }}"
                alt="{{ $image->title }}"
                class="image-fixed"
                onclick="toggleFullscreen()"
            >
        </div>

        {{-- FLECHA SIGUIENTE --}}
        @if($next)
            <a href="{{ route('images.show', $next->id) }}" class="nav-arrow right-arrow">❯</a>
        @endif

    </section>



    {{-- ============================================================
         INFORMACIÓN INFERIOR (Título / Fecha / Like)
       ============================================================ --}}
    <section class="info-bar">

        <div class="info-left">
            <h1 class="image-title">{{ $image->title }}</h1>
            <p class="image-date">{{ $image->created_at->format('d/m/Y') }}</p>
        </div>

        {{-- BLOQUE DE LIKE --}}
        <div class="like-block">
            <button class="btn-like-js"
                    data-like-url="{{ route('images.toggle_like', $image->id) }}"
                    aria-pressed="{{ $image->likes->contains('user_id', auth()->id()) ? 'true' : 'false' }}"
            >
                <span class="like-icon">
                    {{ $image->likes->contains('user_id', auth()->id()) ? '❤️' : '🤍' }}
                </span>

                <span class="like-count-js">
                    {{ $image->likes_count ?? $image->likes()->count() }}
                </span>
            </button>
        </div>

    </section>



    {{-- ============================================================
         SECCIÓN DE COMENTARIOS
       ============================================================ --}}
    <section class="comments-section">

        <h2>Comentarios</h2>

        {{-- FORMULARIO DE COMENTAR --}}
        @auth
            <form action="{{ route('comments.store', $image->id) }}" method="POST" class="comment-form">
                @csrf

                <textarea name="content" placeholder="Escribe un comentario..." required></textarea>

                <button class="intro-comment-btn" type="submit">Comentar</button>
            </form>
        @else
            <p class="login-required">Inicia sesión para comentar.</p>
        @endauth

        {{-- LISTA DE COMENTARIOS --}}
        <div class="comments-list">

            @foreach ($image->comments as $comment)

                @php
                    // Avatar del usuario
                    $avatar = $comment->user->profile_picture
                        ? asset('profile_pictures/' . $comment->user->profile_picture)
                        : asset('profile_pictures/perro-perfil.jpg');
                @endphp

                <div class="comment-item">

                    {{-- ===============================
                         AVATAR
                       =============================== --}}
                    <div class="comment-avatar">
                        <a href="{{ route('users.show', $comment->user->username) }}">
                            <img src="{{ $avatar }}" alt="Avatar de {{ $comment->user->name }}">
                        </a>
                    </div>



                    {{-- ===============================
                         CONTENIDO DEL COMENTARIO
                       =============================== --}}
                    <div class="comment-content">

                        {{-- CABECERA (usuario + fecha + eliminar) --}}
                        <div class="comment-top">

                            {{-- Nombre del usuario --}}
                            <a href="{{ route('users.show', $comment->user->username) }}" class="comment-user-link">
                                <strong>{{ $comment->user->name }}</strong>
                            </a>

                            {{-- Fecha --}}
                            <span class="comment-date">
                                {{ $comment->created_at->diffForHumans() }}
                            </span>

                            {{-- Botón eliminar --}}
                            @if($comment->user_id === auth()->id())
                                <form action="{{ route('comments.destroy', $comment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete-comment-btn" title="Eliminar comentario">✖</button>
                                </form>
                            @endif

                        </div>

                        {{-- Texto del comentario --}}
                        <p class="comment-text">{{ $comment->content }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </section>

</main>



{{-- ============================================================
     SCRIPT FULLSCREEN
   ============================================================ --}}
<script>
function toggleFullscreen() {
    const img = document.getElementById('fullImage');
    !document.fullscreenElement
        ? img.requestFullscreen().catch(err => console.error(err))
        : document.exitFullscreen();
}
</script>



{{-- ============================================================
     SCRIPT LIKE
   ============================================================ --}}
<script>
document.addEventListener('DOMContentLoaded', () => {

    const likeBtn = document.querySelector('.btn-like-js');
    if (!likeBtn) return;

    likeBtn.addEventListener('click', async () => {

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

            likeBtn.querySelector('.like-count-js').textContent = data.likes_count;
            likeBtn.querySelector('.like-icon').textContent = data.liked ? '❤️' : '🤍';
            likeBtn.setAttribute('aria-pressed', data.liked);

        } catch (err) {
            alert('Error al enviar like.');
        } finally {
            likeBtn.disabled = false;
        }

    });

});
</script>

@endsection
