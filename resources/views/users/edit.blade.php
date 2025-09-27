@extends('layout')

@section('titulo', 'Tuenti')

@section('contenido')

<header>
    @include('partials.header')
</header>

<main>
    <div class="central">
        <form action="{{ route('users.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-actualizar-perfil">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="surname">Apellidos</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">
                @error('surname')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <div class="error">{{ $message }}</div>
                @enderror

                {{-- Imagen de perfil --}}
                <div class="profile-picture-group">
                    <label for="profile_picture">Foto de perfil</label>
                    <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
                    @error('profile_picture')
                        <div class="error">{{ $message }}</div>
                    @enderror
                    <img id="preview" src="{{ $user->profile_picture ? asset('profile_pictures/'.$user->profile_picture) : asset('img/perro-perfil.png') }}" alt="preview" style="max-width: 100px; margin-top: 10px; border-radius: 10px;">
                </div>

                <input class="btn-actualizar" type="submit" value="Actualizar">
            </div>
        </form>
    </div>
</main>

{{-- Script para preview --}}
<script>
    document.getElementById('profile_picture').addEventListener('change', function (e) {
        const [file] = e.target.files;
        if (file) {
            document.getElementById('preview').src = URL.createObjectURL(file);
        }
    });
</script>

@endsection
