@extends('layout')

@section('titulo', 'Proyecto Perro - Registro')

@section('contenido')
    <div class="registro">
        <div class="h4-registro">
            <h4>Registro</h4>
        </div>

        <div class="form-registro">
            <form action={{ route('registro') }} method="post">
                @csrf

                <label for="name">Nombre de la mascota</label>
                <input class="input-registro placeholder-effect" type="text" name="name" id="name-input" placeholder="Introduce el nombre de la mascota" value="{{ old('name') }}">
                <br>
                <label for="surname">Apellido de la mascota</label>
                <input class="input-registro placeholder-effect" type="text" name="surname" placeholder="Introduce el apellido de la mascota" value="{{ old('surname') }}">
                <br>
                <label for="email">Email del dueño</label>
                <input class="input-registro placeholder-effect" type="email" name="email" id="email" placeholder="Introduce tu email" value="{{ old('email') }}">
                <br>
                <label for="password">Contraseña</label>
                <input class="input-registro placeholder-effect" type="password" name="password" placeholder="Introduce tu contraseña">
                <br>
                {{-- Busqueda de pais y ciudad --}}
                <label for="country">País</label>
                <select class="input-registro" name="country" id="country">
                    <option selected="true" value="" disabled>Introduzca el país</option>
                    <option value="España" {{ old('country') == 'España' ? 'selected' : '' }}>España</option>
                </select>
                <br>
                <label for="city">Ciudad</label>
                <select class="input-registro" name="city" id="city" value="{{ old('city') }}">
                    <option selected="true" value="" disabled>Introduzca la ciudad</option>
                    <option value="Valencia" {{ old('city') == 'Valencia' ? 'selected' : '' }}>Valencia</option>
                    <option value="Alicante" {{ old('city') == 'Alicante' ? 'selected' : '' }}>Alicante</option>
                    <option value="Castellón" {{ old('city') == 'Castellón' ? 'selected' : '' }}>Castellón</option>
                </select>
                {{-- Busqueda de pais y ciudad --}}
                <br>
                <label for="birthdate">Fecha de nacimiento de la mascota</label>
                <input class="input-registro" name="birthdate" type="date" value="{{ old('birthdate') }}">
                <br>
                <div class="breed-class">
                    <label for="breed">Raza</label>
                    <select class="input-registro" name="breed" id="breed">
                        <option selected="true" disabled>Introduzca la raza</option>
                        <option value="Labrador" {{ old('breed') == 'Labrador' ? 'selected' : '' }}>Labrador</option>
                        <option value="Pastor alemán" {{ old('breed') == 'Pastor alemán' ? 'selected' : '' }}>Pastor alemán</option>
                        <option value="Bulldog" {{ old('breed') == 'Bulldog' ? 'selected' : '' }}>Bulldog</option>
                    </select>
                </div>
                <br>
                <div class="colour-class">
                    <label for="colour">Color</label>
                    <select class="input-registro" name="colour" id="colour">
                        <option selected="true" value="" disabled>Introduzca el color</option>
                        <option value="Negro" {{ old('colour') == 'Negro' ? 'selected' : '' }}>Negro</option>
                        <option value="Blanco" {{ old('colour') == 'Blanco' ? 'selected' : '' }}>Blanco</option>
                        <option value="Marrón" {{ old('colour') == 'Marrón' ? 'selected' : '' }}>Marrón</option>
                    </select>
                </div>
                <br>
                <div class="genre-class">
                    <label for="genre">Género</label>
                    <input type="radio" name="genre" value="Macho" id="male">
                    <label for="male">Macho</label>
                    <input type="radio" name="genre" value="Hembra" id="female">
                    <label for="female">Hembra</label>
                </div>
                <br>
                <div class="owner-class">
                    <label for="owner">Dueño</label>
                    <input class="input-registro placeholder-effect" type="text" name="owner" id="owner-input" placeholder="Introduce el nombre del dueño" value="{{ old('owner') }}">
                </div>
                <br>
                <div class="continuar">
                    <input type="submit" value="Continuar">
                </div>
            </form>
            @if ($errors->any())
                <div class="errores-registro">
                    @foreach ($errors->all() as $error)
                        <p class="error-registro">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>

        <a href="{{ route('home')}} ">Volver</a>
    </div>

@endsection
