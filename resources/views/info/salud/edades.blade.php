@extends('layout')

@section('titulo', 'Cuidados según la edad')

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

    <h1 class="info-page-title">Cuidados Según la Edad</h1>

    <p class="intro-text">
        Las necesidades de una mascota cambian a lo largo de su vida. Estos son los cuidados
        esenciales para cada etapa, desde cachorros hasta la vejez.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🐾 Cachorros / Gatitos (0 - 1 año)</h2>
        <ul>
            <li><strong>Alimentación específica:</strong> comida rica en nutrientes y adaptada al crecimiento.</li>
            <li><strong>Vacunación temprana:</strong> completar el calendario básico y refuerzos.</li>
            <li><strong>Socialización:</strong> contacto con personas y otros animales.</li>
            <li><strong>Educación inicial:</strong> aprender normas básicas del hogar.</li>
            <li><strong>Visitas al veterinario:</strong> controles frecuentes durante su desarrollo.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🐕 Adultos (1 - 7 años)</h2>
        <ul>
            <li><strong>Ejercicio regular:</strong> según especie y nivel de energía.</li>
            <li><strong>Alimentación equilibrada:</strong> controlar peso y evitar excesos.</li>
            <li><strong>Revisión anual:</strong> chequeo completo para detectar problemas tempranos.</li>
            <li><strong>Higiene:</strong> baño periódico, limpieza dental y revisión de oídos.</li>
            <li><strong>Estimulación mental:</strong> juegos, retos y entrenamiento continuo.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🐶 Mascotas Mayores (7+ años)</h2>
        <ul>
            <li><strong>Alimento senior:</strong> fórmulas específicas para digestión y articulaciones.</li>
            <li><strong>Controles cada 6 meses:</strong> análisis, control de peso y chequeos cardiacos.</li>
            <li><strong>Ejercicio moderado:</strong> paseos más cortos pero frecuentes.</li>
            <li><strong>Atención al dolor:</strong> detectar rigidez, cojera o dificultad al levantarse.</li>
            <li><strong>Ambiente seguro:</strong> evitar saltos altos y resbalones.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🧡 Consejos Generales para Todas las Edades</h2>
        <ul>
            <li>Hidratación constante y agua siempre limpia.</li>
            <li>Mantener un peso saludable para evitar enfermedades crónicas.</li>
            <li>Enriquecimiento ambiental para reducir el estrés.</li>
            <li>Vigilancia de comportamientos inusuales.</li>
            <li>Amor, paciencia y un entorno seguro.</li>
        </ul>
    </section>

</div>

@endsection
