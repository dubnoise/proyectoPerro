@extends('layout')

@section('titulo', 'Tipos de Alimento y Recomendaciones')

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

    <h1 class="info-page-title">Tipos de Alimento y Recomendaciones</h1>

    <p class="intro-text">
        Elegir el alimento adecuado es esencial para garantizar la salud, energía y bienestar de tu mascota.
        Aquí encontrarás una guía completa sobre los diferentes tipos de alimentación disponibles.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🥣 Pienso Seco</h2>
        <ul>
            <li><strong>Ventajas:</strong> económico, fácil de almacenar, ayuda a limpiar dientes.</li>
            <li><strong>Desventajas:</strong> menor contenido de humedad, algunos pueden ser muy procesados.</li>
            <li><strong>Recomendación:</strong> elegir piensos con alto contenido de proteínas de origen animal.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🥫 Comida Húmeda</h2>
        <ul>
            <li><strong>Ventajas:</strong> mayor palatabilidad, más hidratante.</li>
            <li><strong>Desventajas:</strong> más costosa, dura menos una vez abierta.</li>
            <li><strong>Recomendación:</strong> ideal para gatos y mascotas que beben poca agua.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🍗 Dieta BARF (Cruda)</h2>
        <ul>
            <li><strong>Ventajas:</strong> alimentación más natural y rica en nutrientes.</li>
            <li><strong>Desventajas:</strong> requiere control veterinario y congelación adecuada.</li>
            <li><strong>Recomendación:</strong> no apta sin supervisión profesional.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🍛 Comida Casera Cocinada</h2>
        <ul>
            <li><strong>Ventajas:</strong> control total de ingredientes.</li>
            <li><strong>Desventajas:</strong> difícil balancear nutrientes sin guía veterinaria.</li>
            <li><strong>Recomendación:</strong> ideal con recetas aprobadas por especialistas.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>📌 ¿Cuál es la Mejor Opción?</h2>
        <ul>
            <li>Depende de la especie, edad, salud y preferencias de tu mascota.</li>
            <li>Consulta siempre con un veterinario antes de cambiar la dieta.</li>
            <li>Evita productos muy baratos: suelen contener muchos subproductos.</li>
        </ul>
    </section>

</div>

@endsection
