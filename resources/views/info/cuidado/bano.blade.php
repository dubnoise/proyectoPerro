@extends('layout')

@section('titulo', 'Baño y Cepillado')

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

    <h1 class="info-page-title">Baño y Cepillado</h1>

    <p class="intro-text">
        Mantener una buena higiene en tu mascota es fundamental para su salud y bienestar.
        El baño y el cepillado no solo ayudan a mantener su pelaje limpio, sino que también
        previenen enfermedades de la piel y reducen la caída excesiva del pelo.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🛁 ¿Cada cuánto debo bañar a mi mascota?</h2>
        <p>La frecuencia depende del tipo de animal y su estilo de vida:</p>
        <ul>
            <li><strong>Perros:</strong> cada 3 a 6 semanas, según raza y actividad física.</li>
            <li><strong>Perros de pelo largo:</strong> pueden requerir baños más frecuentes.</li>
            <li><strong>Gatos:</strong> rara vez necesitan baño, salvo casos especiales.</li>
            <li><strong>Mascotas que salen mucho a la calle:</strong> pueden requerir baños más frecuentes.</li>
        </ul>
        <p>
            Es importante no bañar demasiado, pues puede eliminar los aceites naturales del pelaje.
        </p>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🧴 Productos recomendados</h2>
        <p>Utiliza solo productos diseñados especialmente para mascotas:</p>
        <ul>
            <li>Champú hipoalergénico para piel sensible.</li>
            <li>Champú antipulgas (si es necesario y recomendado por un veterinario).</li>
            <li>Acondicionador para reducir nudos en razas de pelo largo.</li>
            <li>Toallas absorbentes o secador a baja temperatura.</li>
        </ul>
        <p><strong>Nunca uses champú de humanos</strong>, ya que puede irritar su piel.</p>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🧼 Pasos para un baño correcto</h2>
        <ul>
            <li>Cepilla antes de mojar para evitar nudos difíciles.</li>
            <li>Usa agua tibia, nunca caliente.</li>
            <li>Aplica champú desde el cuello hasta la cola, evitando ojos y oídos.</li>
            <li>Enjuaga bien para no dejar residuos.</li>
            <li>Seca con toalla o secador a baja potencia.</li>
            <li>Evita corrientes de aire durante el secado.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🐕 Cepillado regular</h2>
        <p>
            El cepillado es una de las mejores rutinas para mantener el pelaje sano y reducir
            la caída del pelo en casa.
        </p>
        <ul>
            <li><strong>Pelo corto:</strong> 1–2 veces por semana.</li>
            <li><strong>Pelo medio:</strong> 2–3 veces por semana.</li>
            <li><strong>Pelo largo:</strong> a diario para evitar enredos.</li>
            <li><strong>Gatos:</strong> depende del pelaje, pero mínimo 2 veces por semana.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🪮 Tipos de cepillos recomendados</h2>
        <ul>
            <li><strong>Cardas metálicas:</strong> ideales para pelo largo.</li>
            <li><strong>Peines deslanadores:</strong> reducen la caída en época de muda.</li>
            <li><strong>Guantes de silicona:</strong> perfectos para gatos y perros nerviosos.</li>
            <li><strong>Cepillos de cerdas suaves:</strong> para dar brillo al pelaje.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>⚠ Señales de alerta</h2>
        <p>Si notas alguno de estos síntomas consulta a un veterinario:</p>
        <ul>
            <li>Olor muy fuerte incluso después del baño.</li>
            <li>Enrojecimiento o irritación en la piel.</li>
            <li>Caspa persistente.</li>
            <li>Pérdida de pelo en zonas específicas.</li>
            <li>Rascado excesivo después de bañar o cepillar.</li>
        </ul>
    </section>

</div>

@endsection
