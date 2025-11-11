@extends('layout')

@section('titulo', 'Proyecto Perro')

@section('contenido')

@if (!Auth::check())
    @include('auth.login')
@else
    <header>
        @include('partials.header')
    </header>

    <main class="home-feed">
        @if (auth()->user()->genre == 'Macho')
            <h2 class="bienvenida">Bienvenido, {{ auth()->user()->name }} 🐶</h2>
        @else
            <h2 class="bienvenida">Bienvenida, {{ auth()->user()->name }} 🐶</h2>
        @endif

        <section class="user-cards-container">
            @forelse ($users as $user)
                @if ($user->id !== auth()->user()->id)
                    <div class="user-card">
                        <a href="{{ route('users.show', $user->id) }}">
                            <img
                                src="{{ $user->profile_picture ? asset('profile_pictures/' . $user->profile_picture) : asset('img/perro-perfil.png') }}"
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
                <p>No hay otros usuarios registrados todavía.</p>
            @endforelse
        </section>
    </main>
@endif

@endsection
