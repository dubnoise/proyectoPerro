@extends('layout')

@section('titulo', 'Proyecto Perro - Registro')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('contenido')
<div class="registro">

    <div class="h4-registro">
        <h4>Registro</h4>
    </div>

    <div class="form-registro">
        <form action="{{ route('registro') }}" method="POST">
            @csrf

            <label for="name">Nombre de la mascota</label>
            <input class="input-registro placeholder-effect" type="text" name="name" id="name-input"
                   placeholder="Introduce el nombre de la mascota" value="{{ old('name') }}">
            <br>

            <label for="surname">Apellido de la mascota</label>
            <input class="input-registro placeholder-effect" type="text" name="surname"
                   placeholder="Introduce el apellido de la mascota" value="{{ old('surname') }}">
            <br>

            <label for="email">Email del dueño</label>
            <input class="input-registro placeholder-effect" type="email" name="email" id="email"
                   placeholder="Introduce tu email" value="{{ old('email') }}">
            <br>

            <label for="password">Contraseña</label>
            <input class="input-registro placeholder-effect" type="password" name="password"
                   placeholder="Introduce tu contraseña">
            <br>

            {{-- País --}}
            <label for="country">País</label>
            <select class="input-registro" name="country" id="country">
                <option value="" disabled selected>Introduzca el país</option>
                <option value="España" {{ old('country') == 'España' ? 'selected' : '' }}>España</option>
            </select>
            <br>

            {{-- Ciudad --}}
            <label for="city">Ciudad</label>
            <select class="input-registro" name="city" id="city">
                <option value="" disabled selected>Introduzca la ciudad</option>
                <option value="Valencia"   {{ old('city') == 'Valencia' ? 'selected' : '' }}>Valencia</option>
                <option value="Alicante"   {{ old('city') == 'Alicante' ? 'selected' : '' }}>Alicante</option>
                <option value="Castellón"  {{ old('city') == 'Castellón' ? 'selected' : '' }}>Castellón</option>
            </select>
            <br>

            {{-- Fecha nacimiento --}}
            <label for="birthdate">Fecha de nacimiento de la mascota</label>
            <input class="input-registro" type="date" name="birthdate" value="{{ old('birthdate') }}">
            <br>

            {{-- Raza --}}
            <div class="breed-class">
                <label for="breed">Raza</label>
                <select class="input-registro" name="breed" id="breed">
                    <option disabled selected>Introduzca la raza</option>
                    <option value="Labrador"         {{ old('breed') == 'Labrador' ? 'selected' : '' }}>Labrador</option>
                    <option value="Pastor alemán"    {{ old('breed') == 'Pastor alemán' ? 'selected' : '' }}>Pastor alemán</option>
                    <option value="Bulldog"          {{ old('breed') == 'Bulldog' ? 'selected' : '' }}>Bulldog</option>
                </select>
            </div>
            <br>

            {{-- Color --}}
            <div class="colour-class">
                <label for="colour">Color</label>
                <select class="input-registro" name="colour" id="colour">
                    <option disabled selected>Introduzca el color</option>
                    <option value="Negro"  {{ old('colour') == 'Negro' ? 'selected' : '' }}>Negro</option>
                    <option value="Blanco" {{ old('colour') == 'Blanco' ? 'selected' : '' }}>Blanco</option>
                    <option value="Marrón" {{ old('colour') == 'Marrón' ? 'selected' : '' }}>Marrón</option>
                </select>
            </div>
            <br>

            {{-- Género - Mejorado y más profesional --}}
            <div class="genre-class">
                <label>Género</label>

                <div class="genre-options">
                    <label class="genre-option">
                        <input type="radio" name="genre" value="Macho"
                               {{ old('genre') == 'Macho' ? 'checked' : '' }}>
                        Macho
                    </label>

                    <label class="genre-option">
                        <input type="radio" name="genre" value="Hembra"
                               {{ old('genre') == 'Hembra' ? 'checked' : '' }}>
                        Hembra
                    </label>
                </div>
            </div>
            <br>

            {{-- Dueño --}}
            <label for="owner">Dueño</label>
            <input class="input-registro placeholder-effect" type="text" name="owner" id="owner-input"
                   placeholder="Introduce el nombre del dueño" value="{{ old('owner') }}">
            <br>

            <div class="continuar">
                <input type="submit" value="Continuar">
            </div>

        </form>

        {{-- Errores --}}
        @if ($errors->any())
        <div class="errores-registro">
            @foreach ($errors->all() as $error)
            <p class="error-registro">{{ $error }}</p>
            @endforeach
        </div>
        @endif
    </div>

    <a class="volver-enlace" href="{{ route('home') }}">Volver</a>
</div>
@endsection
