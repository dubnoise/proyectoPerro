@extends('layout')

@section('titulo', 'Proyecto Perro')

@section('estilos')
@if (!Auth::check())
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endif
@endsection

@section('contenido')

@if (!Auth::check())
    @include('auth.login')
@else

<div class="main-content">

    {{-- HEADER --}}
    <header class="main-header">
        @include('partials.header')
    </header>

    {{-- CONTENIDO PRINCIPAL --}}
    <main class="home-feed">

        {{-- BIENVENIDA --}}
        <h2 class="bienvenida">
            @if (auth()->user()->genre == 'Macho')
                Bienvenido, {{ auth()->user()->name }} 🐶
            @else
                Bienvenida, {{ auth()->user()->name }} 🐶
            @endif
        </h2>

        {{-- LISTA DE USUARIOS --}}
        <section class="home-feed">

    @forelse ($users as $user)

        @php
            $lastImage = $user->images->first();
        @endphp

        <article class="feed-card">

            {{-- CABECERA USUARIO --}}
            <div class="feed-user">

                <a href="{{ route('users.show', $user->username) }}" class="feed-user-link">
                    <img
                        src="{{ $user->profile_picture
                            ? asset('profile_pictures/' . $user->profile_picture)
                            : asset('img/perro-perfil.png') }}"
                        alt="Avatar {{ $user->name }}"
                        class="feed-avatar"
                    >
                </a>

                <a href="{{ route('users.show', $user->username) }}" class="feed-username">
                    {{ $user->name }}
                </a>

            </div>

            {{-- IMAGEN DEL FEED --}}
            <div class="feed-image-wrapper">
                <a href="{{ route('images.show', $lastImage->id) }}">
                    <img
                        src="{{ asset('uploads/' . $lastImage->filename) }}"
                        alt="{{ $lastImage->title }}"
                        class="feed-image"
                    >
                </a>
            </div>

            {{-- TIEMPO --}}
            <div class="feed-meta">
                <span class="feed-time">
                    {{ $lastImage->created_at->diffForHumans() }}
                </span>
            </div>

        </article>

    @empty
        <p class="no-users">No hay imágenes todavía.</p>
    @endforelse

</section>

    </main>
</div>

@endif
@endsection
