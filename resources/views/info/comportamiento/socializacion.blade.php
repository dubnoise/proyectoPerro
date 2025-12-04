@extends('layout')

@section('titulo', 'Socialización')

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

    <h1 class="info-page-title">Socialización en Mascotas</h1>

    <p class="intro-text">
        La socialización es uno de los aspectos más importantes para el bienestar emocional
        de tu mascota. Un animal bien socializado es más seguro, equilibrado y menos propenso
        a desarrollar miedos, agresividad o ansiedad.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🐶 ¿Qué es la socialización?</h2>
        <p>
            Es el proceso mediante el cual tu mascota aprende a relacionarse con otras personas,
            animales, sonidos, ambientes y situaciones nuevas.
            Idealmente, debe comenzar desde cachorro, pero *nunca es tarde* para mejorar la conducta social.
        </p>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🐾 Beneficios de una buena socialización</h2>
        <ul>
            <li>Reduce el miedo y la ansiedad.</li>
            <li>Previene comportamientos agresivos.</li>
            <li>Mejora la convivencia con otros animales.</li>
            <li>Facilita las visitas al veterinario.</li>
            <li>Promueve una vida más equilibrada y feliz.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>👶 Socialización en cachorros</h2>
        <p>
            El período ideal se encuentra entre las 3 y 14 semanas de vida.
            En esta etapa es crucial:
        </p>
        <ul>
            <li>Exponerlos a diferentes personas (niños, adultos, ancianos).</li>
            <li>Presentar objetos nuevos: paraguas, bicicletas, aspiradoras.</li>
            <li>Habituarlos a ruidos comunes: tráfico, música, timbres.</li>
            <li>Contactos positivos con otros animales vacunados.</li>
        </ul>
        <p>
            Siempre hazlo de forma gradual y asociando las experiencias con algo positivo.
        </p>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🐕 Socialización en perros adultos</h2>
        <p>
            Si tu perro no fue socializado de pequeño, aún es posible mejorar:
        </p>
        <ul>
            <li>Utiliza premios para reforzar buenas conductas.</li>
            <li>Acércate lentamente a nuevos estímulos.</li>
            <li>Evita forzarlo o exponerlo a situaciones que lo sobrepasen.</li>
            <li>Busca espacios tranquilos antes de introducir estímulos más intensos.</li>
            <li>Considera apoyo profesional si muestra miedo o agresividad.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🐱 Socialización en gatos</h2>
        <p>
            Los gatos también se benefician enormemente de la socialización:
        </p>
        <ul>
            <li>Déjalos explorar a su propio ritmo.</li>
            <li>Proporciona escondites y zonas altas para que se sientan seguros.</li>
            <li>Introduce personas y sonidos nuevos gradualmente.</li>
            <li>Usa juegos para reforzar experiencias positivas.</li>
            <li>Evita manipularlos en exceso si están estresados.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🧩 Consejos generales</h2>
        <ul>
            <li>Sé paciente: cada mascota tiene su propio ritmo.</li>
            <li>No obligues el contacto; permite el acercamiento voluntario.</li>
            <li>Utiliza refuerzos positivos en todo momento.</li>
            <li>Evita encuentros con animales agresivos.</li>
            <li>Si hay retrocesos, vuelve a experiencias más simples.</li>
        </ul>
    </section>

</div>

@endsection
