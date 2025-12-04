@extends('layout')

@section('titulo', 'Razas de Perros')

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

    <h1 class="info-page-title">Razas de Perros</h1>

    <p class="intro-text">
        Existen más de 300 razas de perros en todo el mundo, cada una con características únicas
        en cuanto a tamaño, temperamento, actividad y cuidados. Conocer las particularidades de cada
        raza te ayudará a elegir la más adecuada para tu estilo de vida y necesidades.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>🐕 Razas pequeñas</h2>
        <p>
            Son ideales para espacios reducidos y suelen ser muy afectuosas. Sin embargo,
            requieren socialización para evitar sobreprotección o ansiedad.
        </p>
        <ul>
            <li><strong>Chihuahua:</strong> valiente, activo, muy apegado a su dueño.</li>
            <li><strong>Pomerania:</strong> inteligente, vivaz, necesita cepillado frecuente.</li>
            <li><strong>Yorkshire Terrier:</strong> enérgico, excelente perro de compañía.</li>
            <li><strong>Shih Tzu:</strong> dócil, tranquilo, requiere cuidados de pelaje.</li>
        </ul>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>🐩 Razas medianas</h2>
        <p>
            Versátiles y equilibradas, perfectas para familias activas.
        </p>
        <ul>
            <li><strong>Border Collie:</strong> extremadamente inteligente, necesita mucha estimulación.</li>
            <li><strong>Beagle:</strong> sociable, curioso y con olfato muy desarrollado.</li>
            <li><strong>Cocker Spaniel:</strong> cariñoso, sensible y apto para niños.</li>
            <li><strong>Bull Terrier:</strong> fuerte, juguetón y con alta energía.</li>
        </ul>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>🐕‍🦺 Razas grandes</h2>
        <p>
            Requieren espacio y ejercicio adecuado. Son excelentes guardianes y compañeros protectores.
        </p>
        <ul>
            <li><strong>Pastor Alemán:</strong> leal, inteligente y muy versátil.</li>
            <li><strong>Golden Retriever:</strong> amable, sociable, ideal para familias.</li>
            <li><strong>Labrador Retriever:</strong> energético, juguetón y muy obediente.</li>
            <li><strong>Boxer:</strong> activo, protector y muy afectuoso.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>🐶 Razas gigantes</h2>
        <p>
            Son impresionantes y normalmente muy tranquilas, aunque requieren cuidados específicos
            por su tamaño.
        </p>
        <ul>
            <li><strong>San Bernardo:</strong> dócil, paciente y excelente con niños.</li>
            <li><strong>Gran Danés:</strong> elegante, noble y sorprendentemente suave en casa.</li>
            <li><strong>Mastín Español:</strong> protector y muy leal.</li>
            <li><strong>Terranova:</strong> amable y amante del agua.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🎯 Factores a considerar al elegir raza</h2>
        <p>Antes de adoptar o comprar un perro, ten en cuenta:</p>
        <ul>
            <li><strong>Nivel de actividad:</strong> ¿eres deportista? ¿prefieres calma?</li>
            <li><strong>Espacio disponible:</strong> no todas las razas se adaptan a pisos pequeños.</li>
            <li><strong>Presupuesto:</strong> algunas razas requieren más cuidados o grooming.</li>
            <li><strong>Tiempo:</strong> razas inteligentes necesitan entrenamiento constante.</li>
            <li><strong>Compatibilidad con niños y otros animales.</strong></li>
        </ul>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>⚠ Cuidados especiales por raza</h2>
        <p>Algunas razas requieren atención adicional:</p>
        <ul>
            <li><strong>Brachicéfalos (Pug, Bulldog):</strong> problemas respiratorios → evitar calor.</li>
            <li><strong>Razas de pelo largo:</strong> cepillado diario para evitar nudos.</li>
            <li><strong>Razas energéticas:</strong> necesitan ejercicio intenso y estimulación mental.</li>
            <li><strong>Razas guardianas:</strong> requieren socialización temprana.</li>
        </ul>
    </section>

</div>

@endsection
