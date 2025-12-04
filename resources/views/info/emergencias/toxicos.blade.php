@extends('layout')

@section('titulo', 'Ingesta de Tóxicos')

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

    <h1 class="info-page-title">Ingesta de Tóxicos en Mascotas</h1>

    <p class="intro-text">
        La ingestión de sustancias tóxicas es una de las emergencias más comunes y peligrosas para
        perros y gatos. Puede causar daños internos graves en cuestión de minutos, por lo que
        identificar los signos y actuar rápidamente es fundamental.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>☠ Sustancias peligrosas más comunes</h2>
        <p>Muchos elementos presentes en el hogar pueden resultar altamente tóxicos para las mascotas:</p>
        <ul>
            <li><strong>Alimentos:</strong> chocolate, uvas, pasas, cebolla, ajo, aguacate, xilitol.</li>
            <li><strong>Plantas:</strong> lirios, aloe vera, difenbaquia, potos, adelfa.</li>
            <li><strong>Medicinas humanas:</strong> ibuprofeno, paracetamol, antidepresivos.</li>
            <li><strong>Productos de limpieza:</strong> lejía, amoniaco, detergentes.</li>
            <li><strong>Tóxicos químicos:</strong> anticongelante, insecticidas, raticidas.</li>
            <li><strong>Cosméticos:</strong> cremas, aceites esenciales, maquillaje.</li>
        </ul>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>⚠ Señales de intoxicación</h2>
        <p>Los síntomas pueden variar según el tóxico, pero los más frecuentes son:</p>
        <ul>
            <li>Vómitos o diarrea (con o sin sangre).</li>
            <li>Salivación excesiva o espuma en la boca.</li>
            <li>Temblores, convulsiones o falta de coordinación.</li>
            <li>Dificultad para respirar.</li>
            <li>Debilidad extrema o desmayos.</li>
            <li>Encías pálidas o de color amarillento.</li>
            <li>Comportamiento alterado: agitación o letargo profundo.</li>
        </ul>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>🚑 ¿Qué hacer si tu mascota ingiere un tóxico?</h2>
        <p>Actúa inmediatamente siguiendo estos pasos:</p>
        <ul>
            <li>Mantén la calma y aleja a la mascota del tóxico.</li>
            <li>Identifica qué sustancia pudo ingerir (guardar envase o restos).</li>
            <li>Llama a tu veterinario o a un centro de emergencias.</li>
            <li>Si vomita, recoge una muestra (puede ayudar al diagnóstico).</li>
            <li>Lava boca y patas si hubo contacto externo.</li>
            <li>Transporta a la mascota al veterinario cuanto antes.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>❌ Lo que NO debes hacer</h2>
        <ul>
            <li>No provocar el vómito sin indicación veterinaria.</li>
            <li>No ofrecer leche ni aceite (puede empeorar la absorción del tóxico).</li>
            <li>No administrar medicinas humanas.</li>
            <li>No esperar “a ver si mejora”. El tiempo es crucial.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🧪 Diagnóstico y tratamiento</h2>
        <p>En la clínica, el veterinario puede aplicar:</p>
        <ul>
            <li>Carbón activado para evitar absorción del tóxico.</li>
            <li>Fluidos intravenosos para proteger órganos.</li>
            <li>Antídotos específicos (si existen).</li>
            <li>Lavado gástrico en casos graves.</li>
            <li>Oxígeno o medicación de soporte.</li>
        </ul>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>🛡 Cómo prevenir intoxicaciones</h2>
        <ul>
            <li>Guardar productos de limpieza fuera de alcance.</li>
            <li>No dejar plantas tóxicas en casa o jardín.</li>
            <li>No ofrecer restos de comida sin verificar si son seguros.</li>
            <li>Evitar que la mascota acceda a basureros.</li>
            <li>Usar trampas y raticidas solo en lugares inaccesibles.</li>
            <li>Supervisar a perros en paseos para evitar ingestas del suelo.</li>
        </ul>
    </section>

</div>

@endsection
