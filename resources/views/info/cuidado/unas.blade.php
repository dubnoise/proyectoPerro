@extends('layout')

@section('titulo', 'Corte de Uñas')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/info/info-detail.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<div class="info-page-container">

    <!-- Botón Volver -->
    <a href="{{ route('info') }}" class="back-btn">⬅ Volver</a>

    <h1 class="info-page-title">Corte de Uñas</h1>

    <p class="intro-text">
        Mantener las uñas de tu mascota a la longitud adecuada es esencial para evitar molestias,
        lesiones y problemas de postura. Muchas mascotas no desgastan sus uñas de forma natural,
        por lo que requieren mantenimiento regular en casa o mediante un profesional.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🐾 ¿Por qué es importante cortar las uñas?</h2>
        <p>Unas uñas demasiado largas pueden generar problemas como:</p>
        <ul>
            <li>Dolor al caminar.</li>
            <li>Postura incorrecta o cojera.</li>
            <li>Enganches en mantas, ropa o muebles.</li>
            <li>Roturas dolorosas de las uñas.</li>
            <li>Riesgo de que la uña se encarne en la almohadilla.</li>
        </ul>
        <p>
            En gatos, también pueden causar daños en superficies y aumentar el estrés si se enganchan al trepar.
        </p>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>✂ ¿Cada cuánto debo cortar las uñas?</h2>
        <ul>
            <li><strong>Perros:</strong> cada 3–6 semanas según su nivel de actividad.</li>
            <li><strong>Gatos:</strong> cada 2–4 semanas, dependiendo de cuánto arañen.</li>
            <li><strong>Razas pequeñas:</strong> requieren cortes más frecuentes porque desgastan menos.</li>
            <li><strong>Mascotas mayores:</strong> suelen necesitar mantenimiento más constante.</li>
        </ul>
        <p>
            Si oyes “clic clic” cuando camina sobre el suelo, es hora de cortar las uñas.
        </p>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🧰 Herramientas recomendadas</h2>
        <ul>
            <li><strong>Cortaúñas tipo guillotina:</strong> ideal para perros pequeños y gatos.</li>
            <li><strong>Cortaúñas tipo tijera:</strong> útil para uñas más gruesas.</li>
            <li><strong>Limas eléctricas:</strong> permiten un acabado suave y seguro.</li>
            <li><strong>Polvo hemostático:</strong> para detener el sangrado si cortas demasiado.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>👣 Cómo cortar las uñas paso a paso</h2>
        <p>Realiza el proceso con paciencia y sin forzar a tu mascota:</p>
        <ul>
            <li>Asegura un ambiente tranquilo para evitar estrés.</li>
            <li>Levanta suavemente la pata y separa los dedos.</li>
            <li>
                Identifica la parte rosada (la “vena” o <strong>pulpa</strong>);
                <strong>evita cortarla</strong> ya que sangra y duele.
            </li>
            <li>Corta solo la punta blanca de la uña.</li>
            <li>Haz pequeños recortes para mayor seguridad.</li>
            <li>Premia a tu mascota después para reforzar la experiencia positiva.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>⚠ ¿Qué hacer si sangra?</h2>
        <p>
            Si accidentalmente cortas demasiado, no entres en pánico.
            Sigue estos pasos:
        </p>
        <ul>
            <li>Aplica polvo hemostático para detener el sangrado.</li>
            <li>Si no tienes, usa harina o maicena como alternativa.</li>
            <li>Presiona suavemente la uña durante unos segundos.</li>
            <li>Evita que camine sobre superficies sucias hasta que deje de sangrar.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>💡 Consejos para mascotas nerviosas</h2>
        <ul>
            <li>Haz sesiones muy cortas (1–2 uñas por día si es necesario).</li>
            <li>Acostúmbrala a que le toquen las patas desde joven.</li>
            <li>Usa snacks o juguetes como refuerzo positivo.</li>
            <li>Prueba con una lima eléctrica si el sonido del corte le asusta.</li>
            <li>Busca un veterinario o peluquero canino si la tarea se complica.</li>
        </ul>
    </section>

</div>

@endsection
