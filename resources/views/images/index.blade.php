@extends('layout')

@section('titulo', 'Galería de Mascotas')

@section('contenido')
<header>
    @include('partials.header')
</header>

<!-- Mensajes de éxito -->
@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<!-- Galería de imágenes -->
<div class="image-gallery">
    @forelse($images as $image)
        <div class="image-item">
            <a href="{{ route('images.show', $image->id) }}">
                <img src="{{ asset('storage/uploads/' . $image->filename) }}" alt="{{ $image->title }}">
            </a>
            <p class="image-title">{{ $image->title }}</p>
            <p class="image-owner">Dueño: {{ $image->user->name }}</p>
            <div class="image-actions">
                <a href="{{ route('images.edit', $image->id) }}" class="btn-editar">✏️ Editar</a>
                <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn-eliminar" onclick="return confirm('¿Seguro que quieres eliminar esta imagen?')">🗑️ Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p>No hay imágenes disponibles.</p>
    @endforelse
</div>
@endsection
