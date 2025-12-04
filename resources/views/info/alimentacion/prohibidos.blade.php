@extends('layout')

@section('titulo', 'Alimentos Prohibidos para Mascotas')

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

    <h1 class="info-page-title">Alimentos Prohibidos para Mascotas</h1>

    <p class="intro-text">
        Algunos alimentos que consumimos de forma habitual pueden resultar tóxicos o peligrosos
        para perros y gatos. Aquí tienes una lista completa y explicada para evitar riesgos.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🍫 Chocolate y Cafeína</h2>
        <p>
            Contienen <strong>teobromina</strong> y <strong>metilxantinas</strong>, sustancias tóxicas para
            perros y gatos. Pueden causar vómitos, temblores, convulsiones y daños cardíacos.
        </p>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🧅 Cebolla, Ajo, Puerro y Cebollín</h2>
        <p>
            Estos alimentos dañan los glóbulos rojos de las mascotas y pueden provocar
            <strong>anemia hemolítica</strong>. Evita cualquier preparación que los contenga.
        </p>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🍇 Uvas y Pasas</h2>
        <p>
            Pueden causar <strong>fallo renal agudo</strong> incluso en pequeñas cantidades.
            Su toxicidad aún no está completamente explicada, por lo que deben evitarse siempre.
        </p>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>❌ Alcohol</h2>
        <p>
            Incluso pequeñas cantidades pueden causar vómitos, desorientación, baja temperatura
            corporal y problemas respiratorios. Es extremadamente peligroso.
        </p>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🍬 Xilitol (edulcorante)</h2>
        <p>
            Se encuentra en chicles, caramelos, postres y productos "sin azúcar".
            Provoca una <strong>bajada brusca de azúcar</strong> y puede causar fallo hepático.
        </p>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🥑 Aguacate</h2>
        <p>
            Contiene <strong>persina</strong>, tóxica para algunas mascotas.
            En perros y gatos puede causar molestias gastrointestinales.
        </p>
    </section>

    <!-- Sección 7 -->
    <section class="info-section">
        <h2>🍞 Masa de Pan Cruda</h2>
        <p>
            La levadura hace que la masa aumente dentro del estómago, lo cual puede generar dolor,
            distensión e intoxicación por alcohol debido a la fermentación.
        </p>
    </section>

    <!-- Sección 8 -->
    <section class="info-section">
        <h2>🍟 Comida Muy Salada o Muy Grasa</h2>
        <p>
            Puede causar pancreatitis, deshidratación y problemas cardíacos.
            Evita dar restos de comida humana sin control.
        </p>
    </section>

    <!-- Sección 9 -->
    <section class="info-section">
        <h2>🍫 Dulces y Postres</h2>
        <p>
            Además del azúcar, pueden contener toxinas como chocolate o xilitol.
            Contribuyen a la obesidad y problemas dentales.
        </p>
    </section>

    <section class="info-section">
        <h2>⚠️ ¿Qué hacer si mi mascota come algo prohibido?</h2>
        <ul>
            <li>No inducir el vómito sin indicación profesional.</li>
            <li>Llamar al veterinario de urgencias.</li>
            <li>Proporcionar información: alimento ingerido, cantidad y hora.</li>
            <li>Observar signos como temblores, vómito, letargo o diarrea.</li>
        </ul>
    </section>

</div>

@endsection
