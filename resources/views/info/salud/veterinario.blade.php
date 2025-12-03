@extends('layout')

@section('titulo', 'Cuándo acudir al veterinario')

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

    <h1 class="info-page-title">Cuándo Acudir al Veterinario</h1>

    <p class="intro-text">
        Saber cuándo es necesario acudir al veterinario es clave para la salud de tu mascota.
        Aquí tienes los síntomas y señales que requieren atención profesional.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🔴 Señales de Urgencia</h2>
        <ul>
            <li>Dificultad para respirar.</li>
            <li>Sangrado abundante o heridas profundas.</li>
            <li>Convulsiones o desmayos.</li>
            <li>Ingesta de tóxicos o alimentos peligrosos.</li>
            <li>Golpes fuertes, caídas o accidentes.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🟠 Síntomas que Requieren Consulta Rápida</h2>
        <ul>
            <li>Fiebre persistente.</li>
            <li>Pérdida repentina de apetito o energía.</li>
            <li>Diarrea o vómitos constantes.</li>
            <li>Cojeo o dolor al moverse.</li>
            <li>Cambios en el comportamiento.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🟡 Revisiones Preventivas</h2>
        <ul>
            <li>Chequeos anuales para mascotas jóvenes y adultas.</li>
            <li>Chequeos cada 6 meses para mascotas mayores.</li>
            <li>Control dental para evitar infecciones.</li>
            <li>Análisis periódicos de sangre y orina.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🟢 Después de una Adopción</h2>
        <ul>
            <li>Revisión completa inicial.</li>
            <li>Actualización del calendario de vacunas.</li>
            <li>Desparasitación interna y externa.</li>
            <li>Evaluación nutricional.</li>
        </ul>
    </section>

</div>

@endsection
