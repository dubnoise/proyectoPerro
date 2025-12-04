@extends('layout')

@section('titulo', 'Razas de Gatos')

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

    <h1 class="info-page-title">Razas de Gatos</h1>

    <p class="intro-text">
        Aunque a primera vista los gatos puedan parecer similares, existen numerosas razas con rasgos
        únicos de personalidad, tamaño, cuidados y nivel de actividad. Conocer sus características te
        ayudará a entender mejor sus necesidades y a elegir el compañero ideal.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>🐈 Razas de pelo corto</h2>
        <p>
            Son fáciles de cuidar, suelen ser muy activas y se adaptan bien a distintos hogares.
        </p>
        <ul>
            <li><strong>Europeo Común:</strong> sociable, curioso y muy adaptable.</li>
            <li><strong>British Shorthair:</strong> tranquilo, cariñoso y muy dócil.</li>
            <li><strong>American Shorthair:</strong> independiente, equilibrado y juguetón.</li>
            <li><strong>Bombay:</strong> elegante, afectuoso y muy sociable.</li>
        </ul>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>🐈‍⬛ Razas de pelo largo</h2>
        <p>
            Requieren cepillado regular debido a su abundante pelaje, pero suelen ser muy tranquilos
            y afectuosos.
        </p>
        <ul>
            <li><strong>Persa:</strong> calmado, dulce, necesita cuidados intensivos de pelaje.</li>
            <li><strong>Angora Turco:</strong> elegante, activo y muy leal.</li>
            <li><strong>Maine Coon:</strong> gigante, sociable, excelente con niños.</li>
            <li><strong>Ragdoll:</strong> extremadamente dócil, parece “de trapo” al cogerlo.</li>
        </ul>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>😺 Razas sin pelo</h2>
        <p>
            Pueden parecer frágiles, pero son robustas. Necesitan cuidados especiales de piel,
            incluyendo baños regulares.
        </p>
        <ul>
            <li><strong>Sphynx:</strong> cariñoso, muy apegado y extremadamente sociable.</li>
            <li><strong>Donskoy:</strong> inteligente, curioso y activo.</li>
            <li><strong>Bambino:</strong> mezcla de Sphynx con Munchkin, pequeño y tierno.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>🐾 Rasgos según temperamento</h2>
        <p>
            Cada raza destaca por un tipo de comportamiento predominante:
        </p>
        <ul>
            <li><strong>Muy sociables:</strong> Ragdoll, Sphynx, Maine Coon.</li>
            <li><strong>Independientes:</strong> Europeo Común, British Shorthair.</li>
            <li><strong>Juguetones y activos:</strong> Bengalí, Angora, Bombai.</li>
            <li><strong>Muy tranquilos:</strong> Persa, Ragdoll.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🎯 Factores a considerar al elegir raza</h2>
        <p>Antes de adoptar o comprar un gato, ten en cuenta:</p>
        <ul>
            <li><strong>Tiempo para grooming:</strong> razas de pelo largo requieren más dedicación.</li>
            <li><strong>Nivel de actividad:</strong> algunos gatos son más demandantes de juego.</li>
            <li><strong>Tolerancia a la soledad:</strong> razas muy sociables sufren más si están solos.</li>
            <li><strong>Alergias:</strong> ningún gato es 100% hipoalergénico, pero algunos causan menos reacción.</li>
            <li><strong>Espacio en casa:</strong> razas grandes necesitan moverse y trepar.</li>
        </ul>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>⚠ Cuidados específicos</h2>
        <p>
            Algunas razas tienen necesidades o predisposiciones especiales:
        </p>
        <ul>
            <li><strong>Persa:</strong> propenso a problemas respiratorios, necesita limpieza ocular.</li>
            <li><strong>Maine Coon:</strong> riesgo de cardiomiopatía hipertrófica (HCM).</li>
            <li><strong>Sphynx:</strong> cuidados de piel, evitar corrientes frías.</li>
            <li><strong>Ragdoll:</strong> requieren socialización constante y compañía humana.</li>
        </ul>
    </section>

</div>

@endsection
