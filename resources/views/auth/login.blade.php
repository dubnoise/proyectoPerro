@extends('layout')

@section('titulo', 'Proyecto Perro - Registro')

@section('contenido')
    <div class="login">
        <div class="h4-login">
            <h4>Login</h4>
        </div>

        <div class="form-login">
            <form action={{route('login')}} method="POST">
                @csrf

                <label for="email">Email</label>
                <input class="input-login placeholder-effect" type="email" name="email" id="email" placeholder="Introduce tu email">
                <br>
                <label for="password">Contraseña</label>
                <input class="input-login placeholder-effect" type="password" name="password" placeholder="Introduce tu contraseña">
                <br>

                <div class="continuar">
                    <input type="submit" value="Continuar">
                </div>
            </form>
            @if (isset($error))
                <div class="error-login">
                    <p>{{ $error }}</p>
                </div>
            @endif
        </div>
        <a href="{{ route('registro') }}">Registarse</a>
    </div>



@endsection
