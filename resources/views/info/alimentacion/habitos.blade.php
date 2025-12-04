@extends('layout')

@section('titulo', 'Hábitos Saludables de Alimentación')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/info/info-detail.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<div class="info-page-container">

    <!-- Botón de volver -->
    <a href="{{ route('info') }}" class="back-btn">⬅ Volver</a>

    <h1 class="info-page-title">Hábitos Saludables de Alimentación</h1>

    <p class="intro-text">
        Una buena alimentación no solo depende del tipo de comida que elijas,
        sino también de los hábitos diarios. Estas prácticas ayudarán a tu mascota
        a mantenerse sana, con energía y con una mejor calidad de vida.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🕒 Establece horarios regulares</h2>
        <p>
            Las mascotas necesitan una rutina.
            Darles de comer todos los días a la misma hora ayuda a:
        </p>
        <ul>
            <li>Regular su metabolismo.</li>
            <li>Evitar la ansiedad por comida.</li>
            <li>Prevenir problemas digestivos.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🥣 Controla las porciones</h2>
        <p>
            El exceso de comida puede llevar a la obesidad, uno de los problemas más comunes.
            Verifica la cantidad recomendada según:
        </p>
        <ul>
            <li>Peso.</li>
            <li>Edad.</li>
            <li>Nivel de actividad.</li>
            <li>Tipo de alimento.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>💧 Agua fresca siempre disponible</h2>
        <p>
            Una hidratación constante es fundamental.
            Cambia el agua al menos dos veces al día y asegúrate de que el recipiente
            esté limpio y sin restos de comida.
        </p>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🚫 Evita dar comida humana</h2>
        <p>
            Aunque pueda parecer inofensivo, muchos alimentos humanos contienen
            demasiada sal, grasa o ingredientes tóxicos para las mascotas.
            Evítalo para prevenir intoxicaciones y malestar digestivo.
        </p>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🍖 Controla los premios</h2>
        <p>
            Los snacks son útiles para educación, pero deben representar menos del
            <strong>10% de la ingesta diaria</strong>.
            Elige opciones saludables y evita premios muy calóricos.
        </p>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🐾 Adapta la alimentación a su edad</h2>
        <p>
            Las necesidades nutricionales cambian con el tiempo.
            Asegúrate de usar alimentos adecuados para:
        </p>
        <ul>
            <li>Cachorros o gatitos.</li>
            <li>Adultos.</li>
            <li>Senior (mayores).</li>
        </ul>
    </section>

    <!-- Sección 7 -->
    <section class="info-section">
        <h2>⚠️ Observa cualquier cambio en su comportamiento</h2>
        <p>
            Si notas falta de apetito, vómitos, diarrea o cambios de peso,
            consulta con un veterinario.
            La alimentación es uno de los primeros indicadores de salud.
        </p>
    </section>

</div>

@endsection
