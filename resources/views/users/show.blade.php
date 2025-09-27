@extends('layout')

@section('titulo', 'Perfil de '. $user->name)

@section('contenido')

<header>
    @include('partials.header')
</header>

<main class="pet-profile-container">
    <div class="pet-card">
        <div class="pet-avatar">
            @if ($profilePicture)
                <img src="{{ $profilePicture }}" alt="{{ $user->profile_picture }}">
            @else
                <img src="{{ asset('profile_pictures/perro-perfil.jpg') }}" alt="default">
            @endif
        </div>

        <div class="pet-info">
            <h2>{{ $user->name }} {{ $user->surname }}</h2>
            <p><strong>Correo:</strong> {{ $user->email }}</p>
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
        </div>
    </div>
</main>

@endsection
