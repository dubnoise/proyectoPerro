@extends('layout')

@section('titulo', 'Ansiedad y Estrés')

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

    <h1 class="info-page-title">Ansiedad y Estrés en Mascotas</h1>

    <p class="intro-text">
        La ansiedad y el estrés son problemas comunes tanto en perros como en gatos.
        Identificar las señales a tiempo y actuar adecuadamente mejorará la calidad
        de vida de tu mascota y evitará comportamientos no deseados.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>😿 ¿Qué causa la ansiedad?</h2>
        <p>
            La ansiedad puede tener múltiples causas. Las más frecuentes son:
        </p>
        <ul>
            <li>Separación de su dueño o familia.</li>
            <li>Ruido intenso (petardos, tormentas, tráfico).</li>
            <li>Falta de socialización.</li>
            <li>Cambios en el hogar o rutina.</li>
            <li>Ambiente demasiado estimulante o demasiado pobre.</li>
            <li>Traumas o experiencias negativas pasadas.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🐾 Señales de ansiedad o estrés</h2>
        <p>Algunas señales son más evidentes, otras muy sutiles:</p>
        <ul>
            <li>Ladridos o maullidos excesivos.</li>
            <li>Destrucción de objetos.</li>
            <li>Lamido compulsivo.</li>
            <li>Falta de apetito.</li>
            <li>Temblor, jadeo o inquietud.</li>
            <li>Ocultarse o intentar escapar.</li>
            <li>Orinar dentro de casa (si antes no lo hacía).</li>
            <li>Agresividad o irritabilidad repentina.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🏠 Cómo ayudar a tu mascota</h2>
        <p>
            Existen muchas estrategias que pueden reducir el estrés:
        </p>
        <ul>
            <li>Establece una rutina diaria firme (paseos, comida, juego).</li>
            <li>Proporciona un ambiente tranquilo y seguro.</li>
            <li>Evita castigos o gritos.</li>
            <li>Haz ejercicio diario adecuado a su nivel de energía.</li>
            <li>Realiza sesiones de juego que estimulen su mente.</li>
            <li>Reduce estímulos visuales o ruidos cuando sea posible.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🎧 Técnicas para calmar la ansiedad</h2>
        <ul>
            <li>Feromonas sintéticas (especialmente útiles en gatos).</li>
            <li>Música suave o sonidos relajantes para perros y gatos.</li>
            <li>Mantas con olor familiar.</li>
            <li>Envolturas calmantes (“Thundershirt”).</li>
            <li>Masajes relajantes.</li>
            <li>Juguetes tipo “Kong” o rompecabezas durante ausencias.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🚪 Ansiedad por separación</h2>
        <p>
            Una de las formas más comunes de ansiedad.
            Recomendaciones:
        </p>
        <ul>
            <li>No hagas drama al salir o volver a casa.</li>
            <li>Deja juguetes interactivos para mantenerlo ocupado.</li>
            <li>Empieza con ausencias muy cortas e incrementa poco a poco.</li>
            <li>Crea una zona segura donde pueda descansar tranquilo.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🧑‍⚕️ ¿Cuándo acudir a un profesional?</h2>
        <p>
            Es recomendable consultar al veterinario o etólogo si:
        </p>
        <ul>
            <li>La ansiedad afecta su alimentación o sueño.</li>
            <li>Hay conductas destructivas severas.</li>
            <li>Ha aparecido agresividad.</li>
            <li>La mascota se hiere a sí misma.</li>
            <li>Los episodios son frecuentes o intensos.</li>
        </ul>
        <p>
            En algunos casos, pueden recomendarse terapias de comportamiento o medicación temporal.
        </p>
    </section>

</div>

@endsection
