@extends('layout')

@section('titulo', 'Cómo Elegir la Mejor Dieta')

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

    <h1 class="info-page-title">Cómo Elegir la Mejor Dieta</h1>

    <p class="intro-text">
        Cada mascota es única, y su alimentación debe adaptarse a sus necesidades específicas.
        Aquí te explicamos los factores más importantes para seleccionar la dieta ideal.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>📌 Considera la Edad</h2>
        <ul>
            <li><strong>Cachorros / Gatitos:</strong> requieren más proteínas y energía.</li>
            <li><strong>Adultos:</strong> necesitan un equilibrio entre nutrientes y control de calorías.</li>
            <li><strong>Mayores:</strong> requieren ingredientes digestibles y apoyo articular.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>⚕️ Condición de Salud</h2>
        <ul>
            <li><strong>Sobrepeso:</strong> dietas bajas en calorías o light.</li>
            <li><strong>Alergias:</strong> alimentos hipoalergénicos o con proteínas novedosas.</li>
            <li><strong>Problemas renales:</strong> dietas específicas para reducir fósforo y proteína.</li>
            <li><strong>Digestiones difíciles:</strong> dietas altamente digestibles.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🥩 Ingredientes de Calidad</h2>
        <ul>
            <li>La proteína debe ser el primer ingrediente (pollo, salmón, pavo, cordero…).</li>
            <li>Evita alimentos basados en subproductos o rellenos como maíz y trigo.</li>
            <li>Elige alimentos con grasas saludables como omega-3.</li>
            <li>Las fuentes de carbohidratos deben ser digestibles (arroz, avena, patata).</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🧪 Comida Comercial vs. Casera</h2>
        <ul>
            <li><strong>Comercial de calidad:</strong> equilibrada y formulada por expertos.</li>
            <li><strong>Casera:</strong> requiere supervisión veterinaria para evitar déficits nutricionales.</li>
            <li><strong>BARF:</strong> debe prepararse y manejarse con protocolos estrictos.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🔍 Cómo Leer una Etiqueta</h2>
        <ul>
            <li>Revisa el porcentaje de proteína y grasa.</li>
            <li>Evita listas de ingredientes largas y poco claras.</li>
            <li>Busca certificaciones o sellos de calidad.</li>
            <li>Comprueba si se especifica el tipo de carne usada.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>💡 Consejos Finales</h2>
        <ul>
            <li>Introduce cambios de alimentación de forma gradual (7–10 días).</li>
            <li>No mezcles dietas sin recomendación profesional.</li>
            <li>Consulta al veterinario si notas diarrea, vómitos o rechazo del alimento.</li>
            <li>Recuerda que no existe una dieta universal: depende de cada mascota.</li>
        </ul>
    </section>

</div>

@endsection
