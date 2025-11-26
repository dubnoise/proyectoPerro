<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos globales -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Estilos específicos de cada vista -->
    @yield('estilos')
</head>

<body>

    @yield('contenido')

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
