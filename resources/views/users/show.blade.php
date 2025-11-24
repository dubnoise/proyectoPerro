@extends('layout')

@section('titulo', 'Perfil de '. $user->name)

@section('contenido')

<header>
    @include('partials.header')
</header>

<main class="pet-profile-container">
    <div class="pet-card">
        <div class="pet-avatar">
            @php
                $finalProfilePic = $profilePicture ?? asset('profile_pictures/perro-perfil.jpg');
            @endphp

            <img
                src="{{ $finalProfilePic }}"
                alt="Foto de perfil"
                class="profile-clickable"
                onclick="openImageModal('{{ $finalProfilePic }}')"
            >
        </div>

        <!-- Modal / Lightbox -->
        <div id="imageModal" class="image-modal" onclick="closeImageModal()">
            <span class="close-btn">&times;</span>
            <img id="modalImage" class="modal-content-img">
        </div>

        <div class="pet-info">
            <h2>{{ $user->name }}</h2>
            <p><strong>País:</strong> {{ $user->country }}</p>
            <p><strong>Ciudad:</strong> {{ $user->city }}</p>
            @if ($age == 0)
                <p><strong>Edad:</strong> {{ $months }} meses</p>
            @else
                <p><strong>Edad:</strong> {{ $age }} años</p>
            @endif
            <p><strong>Raza:</strong> {{ $user->breed }}</p>
            <p><strong>Color:</strong> {{ $user->colour }}</p>
            <p><strong>Género:</strong> {{ $user->genre }}</p>
            <p><strong>Dueño:</strong> {{ $user->owner }}</p>
            {{-- Redes del dueño --}}
<div class="owner-social-section">
    <h3 class="owner-social-title">Redes sociales del dueño</h3>

    <div class="social-links">

        @if($user->instagram)
            <a href="https://instagram.com/{{ ltrim($user->instagram, '@') }}"
               target="_blank"
               class="social-item">
                <img src="{{ asset('img/instagram.png') }}" class="icono-red">
                <span class="social-name">{{ ltrim($user->instagram, '@') }}</span>
            </a>
        @endif

        @if($user->twitter)
            <a href="https://twitter.com/{{ ltrim($user->twitter, '@') }}"
               target="_blank"
               class="social-item">
                <img src="{{ asset('img/twitter.png') }}" class="icono-red">
                <span class="social-name">{{ ltrim($user->twitter, '@') }}</span>
            </a>
        @endif

        @if($user->facebook)
            <a href="https://facebook.com/{{ ltrim($user->facebook, '@') }}"
               target="_blank"
               class="social-item">
                <img src="{{ asset('img/facebook.png') }}" class="icono-red">
                <span class="social-name">{{ ltrim($user->facebook, '@') }}</span>
            </a>
        @endif

        @if($user->tiktok)
            <a href="https://www.tiktok.com/@{{ ltrim($user->tiktok, '@') }}"
               target="_blank"
               class="social-item">
                <img src="{{ asset('img/tiktok.png') }}" class="icono-red">
                <span class="social-name">{{ ltrim($user->tiktok, '@') }}</span>
            </a>
        @endif

    </div>
</div>
        </div>
    </div>
    <div class="user-gallery-preview">

        <div class="header-section">
            <h3>Fotos de {{ $user->name }}</h3>

            <a href="{{ route('users.images', $user->id) }}" class="btn-ver-todas">
                Ver todas las fotos
            </a>
        </div>

        <div class="preview-images">
            @forelse ($lastImages as $image)
                <img src="{{ asset('uploads/' . $image->filename) }}" alt="foto" class="mini-photo">
            @empty
                <p class="no-photos">Este usuario aún no ha subido imágenes.</p>
            @endforelse
        </div>

    </div>

</main>

@endsection

<script>
function openImageModal(imgSrc) {
    document.getElementById("imageModal").style.display = "block";
    document.getElementById("modalImage").src = imgSrc;
}

function closeImageModal() {
    document.getElementById("imageModal").style.display = "none";
}
</script>

