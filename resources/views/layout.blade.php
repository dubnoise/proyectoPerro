<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    @yield('estilos')
</head>

<body>

    {{-- CONTENIDO DE CADA VISTA --}}
    <main class="page-container">
        @yield('contenido')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: "¡Imagen subida!",
                text: "{{ session('success') }}",
                icon: "success",
                timer: 1500,
                timerProgressBar: true,
                showConfirmButton: false
            });
        </script>
    @endif

</body>
</html>
