@extends('layout')

@section('titulo', 'Subir Imagen')

@section('contenido')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/image_create.css') }}">
@endsection

<header>
    @include('partials.header')
</header>

<main>
    <div class="central">
        <h2>Subir nueva imagen</h2>

        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="title">Título de la imagen</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="image_file">Selecciona la imagen</label>
            <input type="file" name="image_file" id="image_file" accept="image/*">
            @error('image_file')
                <div class="error">{{ $message }}</div>
            @enderror
            <img id="preview" src="{{ asset('img/perro-perfil.png') }}" alt="preview">
            <script>
                document.getElementById('image_file').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    if (file) {
                        document.getElementById('preview').src = URL.createObjectURL(file);
                    }
                });
            </script>
            <input type="submit" value="Subir imagen" class="btn-actualizar">
        </form>
    </div>
</main>


@endsection
