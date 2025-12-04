@extends('layout')

@section('titulo', 'Golpe de Calor')

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

    <h1 class="info-page-title">Golpe de Calor en Mascotas</h1>

    <p class="intro-text">
        El golpe de calor es una emergencia grave que puede poner en riesgo la vida de tu mascota en minutos.
        Ocurre cuando su temperatura corporal supera los niveles normales debido a exposición prolongada al calor,
        falta de ventilación o ejercicio intenso en ambientes calurosos. Conocer sus señales y actuar rápido puede
        salvarle la vida.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>🔥 ¿Qué es un golpe de calor?</h2>
        <p>
            Es un aumento extremo de la temperatura corporal que el animal no puede regular por sí mismo.
            Perros y gatos regulan el calor principalmente mediante jadeo, por lo que son muy vulnerables.
        </p>
        <ul>
            <li>Temperatura corporal superior a 40°C.</li>
            <li>Deshidratación severa.</li>
            <li>Fallo progresivo de órganos si no se actúa rápido.</li>
        </ul>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>⚠ Señales de alarma</h2>
        <p>Si tu mascota presenta alguno de estos síntomas, puede estar sufriendo un golpe de calor:</p>
        <ul>
            <li>Jadeo excesivo, muy acelerado o dificultad para respirar.</li>
            <li>Lengua y encías muy rojas (o pálidas en casos graves).</li>
            <li>Debilidad, temblores o desorientación.</li>
            <li>Vómitos o diarrea (a veces con sangre).</li>
            <li>Convulsiones o desmayos.</li>
            <li>Hipersalivación.</li>
        </ul>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>🚑 ¿Qué hacer de inmediato?</h2>
        <p>
            Actúa rápido pero con cuidado. La prioridad es bajar su temperatura progresivamente mientras
            te diriges al veterinario.
        </p>
        <ul>
            <li>Llevar a la mascota a un lugar fresco y sombreado.</li>
            <li>Ofrecer agua fresca, pero sin obligarlo a beber.</li>
            <li>Aplicar paños húmedos (no hielo) en cuello, axilas e ingles.</li>
            <li>Usar ventilador para ayudar a bajar temperatura.</li>
            <li>Nunca sumergirlo en agua fría de golpe, puede empeorar la situación.</li>
            <li>Acudir al veterinario aunque parezca estabilizarse.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>❌ Lo que NO debes hacer</h2>
        <ul>
            <li>No cubrirlo con toallas mojadas, retienen el calor.</li>
            <li>No usar agua helada ni hielo directo.</li>
            <li>No forzarlo a beber agua.</li>
            <li>No esperar a que mejore sin supervisión médica.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🛡 Prevención: cómo evitar un golpe de calor</h2>
        <p>
            La mayoría de casos se pueden prevenir con simples hábitos.
        </p>
        <ul>
            <li>Nunca dejar mascotas dentro del coche, ni con ventanas abiertas.</li>
            <li>Evitar paseos durante las horas de más calor.</li>
            <li>Proveer siempre sombra y agua fresca.</li>
            <li>Evitar ejercicio intenso en verano.</li>
            <li>Cepillar regularmente a mascotas de pelo largo.</li>
            <li>Instalar alfombrillas refrescantes o ventilación adecuada.</li>
        </ul>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>🐾 Mascotas más propensas</h2>
        <ul>
            <li>Razas braquicéfalas (bulldog, pug, shih tzu, persa, etc.).</li>
            <li>Perros y gatos mayores.</li>
            <li>Animales con sobrepeso.</li>
            <li>Cachorros.</li>
            <li>Mascotas con enfermedades respiratorias o cardíacas.</li>
        </ul>
    </section>

</div>

@endsection
