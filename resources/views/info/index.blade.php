@extends('layout')

@section('titulo', 'Info')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/info/info.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<div class="info-container">

    <h1 class="info-title">Información y Tips para tus Mascotas</h1>

    <div class="info-grid">

        <!-- SALUD -->
        <section class="info-card info-salud">
            <h2>🐶 Salud y Bienestar</h2>
            <ul>
                <li><a href="{{ route('info.salud.enfermedades') }}">Enfermedades comunes por especie</a></li>
                <li><a href="{{ route('info.salud.veterinario') }}">Cuándo acudir al veterinario</a></li>
                <li><a href="{{ route('info.salud.edades') }}">Cuidados según la edad</a></li>
                <li><a href="{{ route('info.salud.vacunas') }}">Vacunación y desparasitación</a></li>
            </ul>
        </section>

        <!-- ALIMENTACION -->
        <section class="info-card info-alimentacion">
            <h2>🍗 Alimentación</h2>
            <ul>
                <li><a href="{{ route('info.alimentacion.tipos') }}">Tipos de alimento y recomendaciones</a></li>
                <li><a href="{{ route('info.alimentacion.dieta') }}">Cómo elegir la mejor dieta</a></li>
                <li><a href="{{ route('info.alimentacion.prohibidos') }}">Alimentos prohibidos</a></li>
                <li><a href="{{ route('info.alimentacion.habitos') }}">Hábitos saludables</a></li>
            </ul>
        </section>

        <!-- COMPORTAMIENTO -->
        <section class="info-card info-comportamiento">
            <h2>🎓 Comportamiento y Educación</h2>
            <ul>
                <li><a href="{{ route('info.comportamiento.ordenes') }}">Órdenes básicas</a></li>
                <li><a href="{{ route('info.comportamiento.socializacion') }}">Socialización</a></li>
                <li><a href="{{ route('info.comportamiento.ansiedad') }}">Ansiedad y estrés</a></li>
                <li><a href="{{ route('info.comportamiento.juegos') }}">Juegos y estimulación</a></li>
            </ul>
        </section>

        <!-- CUIDADO -->
        <section class="info-card info-cuidado">
            <h2>🧼 Cuidado Diario</h2>
            <ul>
                <li><a href="{{ route('info.cuidado.bano') }}">Baño y cepillado</a></li>
                <li><a href="{{ route('info.cuidado.unas') }}">Corte de uñas</a></li>
                <li><a href="{{ route('info.cuidado.limpieza') }}">Limpieza general</a></li>
                <li><a href="{{ route('info.cuidado.accesorios') }}">Accesorios recomendados</a></li>
            </ul>
        </section>

        <!-- RAZAS -->
        <section class="info-card info-razas">
            <h2>🐾 Razas y Características</h2>
            <ul>
                <li><a href="{{ route('info.razas.perros') }}">Razas de perros</a></li>
                <li><a href="{{ route('info.razas.gatos') }}">Razas de gatos</a></li>
                <li><a href="{{ route('info.razas.otros') }}">Otras especies</a></li>
            </ul>
        </section>

        <!-- EMERGENCIAS -->
        <section class="info-card info-emergencias">
            <h2>🚨 Emergencias Básicas</h2>
            <ul>
                <li><a href="{{ route('info.emergencias.golpe-calor') }}">Golpes de calor</a></li>
                <li><a href="{{ route('info.emergencias.toxicos') }}">Ingesta de tóxicos</a></li>
                <li><a href="{{ route('info.emergencias.senales') }}">Señales de alarma</a></li>
                <li><a href="{{ route('info.emergencias.primeros-auxilios') }}">Primeros pasos</a></li>
            </ul>
        </section>

    </div>
</div>

@endsection
