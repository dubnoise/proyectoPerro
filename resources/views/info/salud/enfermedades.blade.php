@extends('layout')

@section('titulo', 'Enfermedades Comunes')

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

    <h1 class="info-page-title">Enfermedades Comunes por Especie</h1>

    <p class="intro-text">
        Aquí encontrarás información clara y útil sobre las enfermedades más frecuentes en mascotas,
        sus síntomas y cuándo debes acudir al veterinario.
    </p>

    <!-- Tarjeta 1 -->
    <section class="info-section">
        <h2>🐶 Perros</h2>
        <ul>
            <li><strong>Parvovirus:</strong> vómitos, diarrea con sangre, decaimiento.</li>
            <li><strong>Moquillo:</strong> fiebre, secreciones nasales, convulsiones.</li>
            <li><strong>Leishmaniasis:</strong> pérdida de peso, heridas en la piel.</li>
            <li><strong>Otitis:</strong> enrojecimiento, mal olor, rascado constante.</li>
        </ul>
    </section>

    <!-- Tarjeta 2 -->
    <section class="info-section">
        <h2>🐱 Gatos</h2>
        <ul>
            <li><strong>PIF:</strong> fiebre persistente, abdomen inflamado.</li>
            <li><strong>Panleucopenia:</strong> vómitos, diarrea severa.</li>
            <li><strong>Conjuntivitis:</strong> ojos llorosos, párpados hinchados.</li>
            <li><strong>Insuficiencia renal:</strong> mucha sed, pérdida de apetito.</li>
        </ul>
    </section>

    <!-- Tarjeta 3 -->
    <section class="info-section">
        <h2>🐰 Otros Animales</h2>
        <ul>
            <li><strong>Conjuntivitis en conejos:</strong> ojos irritados y legañas.</li>
            <li><strong>Problemas respiratorios:</strong> estornudos frecuentes.</li>
            <li><strong>Parásitos externos:</strong> picor, caída de pelo.</li>
        </ul>
    </section>

</div>

@endsection
