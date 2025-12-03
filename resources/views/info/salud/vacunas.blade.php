@extends('layout')

@section('titulo', 'Vacunación y Desparasitación')

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

    <h1 class="info-page-title">Vacunación y Desparasitación</h1>

    <p class="intro-text">
        Mantener al día la vacunación y desparasitación de tu mascota es esencial para prevenir
        enfermedades graves y garantizar su bienestar a lo largo de su vida.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>💉 Vacunas Esenciales para Perros</h2>
        <ul>
            <li><strong>Parvovirus:</strong> fundamental en cachorros.</li>
            <li><strong>Moquillo:</strong> enfermedad viral muy contagiosa.</li>
            <li><strong>Hepatitis infecciosa:</strong> afecta al hígado.</li>
            <li><strong>Leptospirosis:</strong> puede transmitirse a humanos.</li>
            <li><strong>Rabia:</strong> obligatoria en muchos países.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🐱 Vacunas Esenciales para Gatos</h2>
        <ul>
            <li><strong>Trivalente felina (PIF):</strong> protege contra enfermedades respiratorias.</li>
            <li><strong>Panleucopenia:</strong> virus altamente resistente.</li>
            <li><strong>Leucemia felina (FeLV):</strong> recomendada especialmente para gatos con acceso al exterior.</li>
            <li><strong>Rabia:</strong> depende de la normativa local.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🦠 Tipos de Desparasitación</h2>
        <ul>
            <li><strong>Interna:</strong> combate parásitos como lombrices o tenias.</li>
            <li><strong>Externa:</strong> pulgas, garrapatas y ácaros.</li>
            <li><strong>Mixta:</strong> recomendada para mascotas con acceso al exterior.</li>
            <li><strong>Métodos:</strong> comprimidos, pipetas, collares o jarabes.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>📅 Frecuencia Recomendada</h2>
        <ul>
            <li><strong>Cachorros y gatitos:</strong> desparasitación cada 15 días hasta los 3 meses.</li>
            <li><strong>Adultos:</strong> cada 3 meses, según estilo de vida.</li>
            <li><strong>Perros de exterior:</strong> cada 1–2 meses.</li>
            <li><strong>Vacunas:</strong> refuerzos anuales según esquema veterinario.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>📝 Consejos Finales</h2>
        <ul>
            <li>No aplicar antiparasitarios sin consultar al veterinario.</li>
            <li>No mezclar medicamentos sin indicación profesional.</li>
            <li>Revisar siempre el calendario de vacunas actualizado.</li>
            <li>Comprobar posibles reacciones tras cada vacuna.</li>
        </ul>
    </section>

</div>

@endsection
