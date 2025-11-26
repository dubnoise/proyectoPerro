@extends('layout')

@section('titulo', 'Login')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('contenido')
<div class="login-container">
    <div class="login-card">
        <h2>Login</h2>

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" placeholder="Introduce tu email" required>

            <label>Contraseña</label>
            <input type="password" name="password" placeholder="Introduce tu contraseña" required>

            <button type="submit" class="btn">Continuar</button>
        </form>

        <a class="register-link" href="{{ route('registro') }}">Registrarse</a>
    </div>
</div>
@endsection
