@extends('layout')

@section('titulo', 'Galería de ' . $user->name)

@section('contenido')

<header>
    @include('partials.header')
</header>

<main class="gallery-container">

    <h2 class="gallery-title">Galería de {{ $user->name }}</h2>

    <a href="{{ route('users.show', $user->id) }}" class="btn-volver">
        ← Volver al perfil
    </a>

    <div class="images-grid">
        @forelse($images as $image)
            <div class="image-card">

                <a href="{{ route('images.show', $image->id) }}">
                    <img src="{{ asset('uploads/' . $image->filename) }}" alt="Imagen" class="image-item">
                </a>

                <div class="image-info">
                    <h4 class="image-title">{{ $image->title }}</h4>
                    <p class="image-date">
                        {{ $image->created_at->format('d/m/Y') }}
                    </p>
                </div>

            </div>
        @empty
            <p class="no-images">Este usuario todavía no ha subido imágenes.</p>
        @endforelse
    </div>

</main>

@endsection
