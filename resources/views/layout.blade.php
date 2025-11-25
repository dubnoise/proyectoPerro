<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('titulo')
    </title>
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
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // CSRF token from meta tag (añade <meta name="csrf-token" content="{{ csrf_token() }}"> en tu layout)
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        function handleLikeButton(button) {
            button.addEventListener('click', async function (e) {
                e.preventDefault();
                const imageId = button.dataset.imageId;
                if (!imageId) return;

                const url = '/images/' + imageId + '/like';

                try {
                    const res = await fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token,
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    });

                    if (!res.ok) throw new Error('Network response was not ok');

                    const data = await res.json();

                    // actualizar UI: icono y contador
                    const icon = button.querySelector('.like-icon');
                    const countSpan = button.querySelector('.like-count-js');

                    if (data.liked) {
                        icon.textContent = '❤️';
                        button.setAttribute('aria-pressed', 'true');
                        button.classList.add('liked');
                    } else {
                        icon.textContent = '🤍';
                        button.setAttribute('aria-pressed', 'false');
                        button.classList.remove('liked');
                    }

                    if (countSpan) countSpan.textContent = data.count;

                    // opcional: animación rápida
                    button.animate([
                        { transform: 'scale(1.0)' },
                        { transform: 'scale(1.12)' },
                        { transform: 'scale(1.0)' }
                    ], { duration: 250 });

                } catch (err) {
                    console.error(err);
                    alert('Error al enviar like. Intenta de nuevo.');
                }
            });
        }

        document.querySelectorAll('.btn-like-js').forEach(handleLikeButton);
    });
    </script>

</body>
</html>
