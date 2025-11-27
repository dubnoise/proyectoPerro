@extends('layout')

@section('titulo', 'Editar perfil')

{{-- Estilos ESPECÍFICOS de esta vista --}}
@section('estilos')
<link rel="stylesheet" href="{{ asset('css/edit_profile.css') }}">
@endsection

@section('contenido')

{{-- Header --}}
@include('partials.header')

<main>
    <div class="central">
        <form action="{{ route('users.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-actualizar-perfil">

                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">

                <label for="surname">Apellidos</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname', $user->surname) }}">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">

                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">

                <label for="password_confirmation">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation">

                <label for="instagram">Instagram</label>
                <input type="text" name="instagram" id="instagram" value="{{ old('instagram', $user->instagram) }}">

                <label for="tiktok">TikTok</label>
                <input type="text" name="tiktok" id="tiktok" value="{{ old('tiktok', $user->tiktok) }}">

                <label for="twitter">Twitter</label>
                <input type="text" name="twitter" id="twitter" value="{{ old('twitter', $user->twitter) }}">

                <label for="owner">Dueño</label>
                <input type="text" name="owner" id="owner" value="{{ old('owner', $user->owner) }}">

                <div class="profile-picture-group">
                    <label for="profile_picture">Foto de perfil</label>
                    <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
                    <img id="preview" src="{{ $user->profile_picture ? asset('profile_pictures/'.$user->profile_picture) : asset('img/perro-perfil.png') }}">
                </div>

                <input class="btn-actualizar" type="submit" value="Actualizar">
            </div>
        </form>
    </div>
</main>

@endsection
