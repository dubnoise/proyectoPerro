@extends('layout')

@section('titulo', 'Señales de Alarma')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/info/info-detail.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<div class="info-page-container">

    <!-- BOTÓN VOLVER -->
    <a href="{{ route('info') }}" class="back-btn">⬅ Volver</a>

    <h1 class="info-page-title">Señales de Alarma en Mascotas</h1>

    <p class="intro-text">
        Saber identificar las señales de alarma en perros y gatos puede marcar la diferencia entre
        un susto y una emergencia grave. Las mascotas suelen ocultar el dolor o el malestar, por lo
        que es fundamental prestar atención a cambios sutiles en su comportamiento y en su estado físico.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>⚠ Cambios en el comportamiento</h2>
        <p>Estas conductas pueden indicar que algo no va bien:</p>
        <ul>
            <li>Letargo o falta de energía repentina.</li>
            <li>Agresividad súbita o irritabilidad.</li>
            <li>Inquietud excesiva o incapacidad para quedarse quieto.</li>
            <li>LLanto, quejidos o vocalizaciones continuas.</li>
            <li>Esconderse más de lo habitual.</li>
        </ul>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>🔥 Signos físicos visibles</h2>
        <p>Algunas señales físicas requieren atención inmediata:</p>
        <ul>
            <li>Encías pálidas, muy rojas o amarillentas.</li>
            <li>Salivación excesiva o espuma en la boca.</li>
            <li>Dificultad para respirar, jadeo intenso o respiración muy lenta.</li>
            <li>Temblores o convulsiones.</li>
            <li>Heridas profundas, sangrado abundante o inflamación marcada.</li>
        </ul>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>🥴 Señales digestivas de alarma</h2>
        <ul>
            <li>Vómitos recurrentes o con sangre.</li>
            <li>Diarrea intensa o con sangre.</li>
            <li>Abdomen duro, hinchado o doloroso al tocarlo.</li>
            <li>Pérdida total del apetito durante más de 24 horas.</li>
            <li>Arcadas continuas sin expulsar nada.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>💓 Signos relacionados con el corazón y la respiración</h2>
        <ul>
            <li>Respiración muy acelerada o irregular.</li>
            <li>Tos persistente.</li>
            <li>Desmayos o caídas repentinas.</li>
            <li>Pulso débil o muy rápido.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🧠 Señales neurológicas</h2>
        <ul>
            <li>Desorientación o caminar en círculos.</li>
            <li>Dificultad para mantener el equilibrio.</li>
            <li>Convulsiones o espasmos.</li>
            <li>Pérdida de conciencia.</li>
        </ul>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>🚑 ¿Cuándo acudir al veterinario?</h2>
        <p>
            Deberías acudir a urgencias veterinarias si tu mascota presenta cualquiera de estas señales:
        </p>
        <ul>
            <li>Sangrado que no se detiene.</li>
            <li>Dificultad para respirar.</li>
            <li>Convulsiones.</li>
            <li>Caídas con pérdida de conciencia.</li>
            <li>Incapacidad para caminar o mantenerse en pie.</li>
            <li>Temperatura corporal superior a 40°C o inferior a 36°C.</li>
        </ul>
    </section>

    <!-- SECCIÓN 7 -->
    <section class="info-section">
        <h2>🛡 Cómo monitorear la salud en casa</h2>
        <p>Revisa de forma habitual:</p>
        <ul>
            <li>Encías (color y humedad).</li>
            <li>Respiración (frecuencia y esfuerzo).</li>
            <li>Actividad diaria (ánimo, juego, apetito).</li>
            <li>Aspecto de heces y orina.</li>
            <li>Temperatura si notas signos de enfermedad.</li>
        </ul>
    </section>

</div>

@endsection
