@extends('layout')

@section('titulo', 'Proyecto Perro')

{{-- ARCHIVOS CSS ESPECÍFICOS --}}
@section('estilos')
@if (!Auth::check())
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

@endif
@endsection

@section('contenido')



{{-- SI NO ESTÁ LOGEADO, MOSTRAR LOGIN --}}
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

            {{-- BIENVENIDA PERSONALIZADA --}}
            <h2 class="bienvenida">
                @if (auth()->user()->genre == 'Macho')
                    Bienvenido, {{ auth()->user()->name }} 🐶
                @else
                    Bienvenida, {{ auth()->user()->name }} 🐶
                @endif
            </h2>

            {{-- LISTA DE USUARIOS --}}
            <section class="user-cards-container">
                @forelse ($users as $user)
                    @if ($user->id !== auth()->user()->id)

                        <div class="user-card">
                            <a href="{{ route('users.show', $user->id) }}">
                                <img
                                    src="{{ $user->profile_picture
                                        ? asset('profile_pictures/' . $user->profile_picture)
                                        : asset('img/perro-perfil.png') }}"
                                    alt="{{ $user->name }}"
                                    class="user-avatar"
                                >

                                <div class="user-info">
                                    <h3>{{ $user->name }}</h3>
                                    <p>{{ $user->city }}, {{ $user->country }}</p>
                                </div>
                            </a>
                        </div>

                    @endif
                @empty
                    <p class="no-users">No hay otros usuarios registrados todavía.</p>
                @endforelse
            </section>

        </main>
    </div>

@endif


@endsection
