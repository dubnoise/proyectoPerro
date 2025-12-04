    @extends('layout')

@section('titulo', 'Primeros Pasos en Emergencias')

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

    <h1 class="info-page-title">Primeros Pasos en Caso de Emergencia</h1>

    <p class="intro-text">
        Ante una situación de emergencia con tu mascota, los primeros minutos son cruciales.
        Conservar la calma y actuar correctamente puede salvar su vida. Esta guía te muestra
        los pasos iniciales más importantes antes de llegar al veterinario.
    </p>

    <!-- SECCIÓN 1 -->
    <section class="info-section">
        <h2>🧘 Mantén la calma</h2>
        <p>
            Tu mascota puede sentir tu estrés, y eso puede empeorar su estado. Respira hondo y
            mantén el control para poder actuar de forma eficiente.
        </p>
    </section>

    <!-- SECCIÓN 2 -->
    <section class="info-section">
        <h2>🔒 Evalúa la seguridad del entorno</h2>
        <p>
            Antes de acercarte a la mascota, asegúrate de que no existe peligro:
        </p>
        <ul>
            <li>Retira objetos cortantes o peligrosos.</li>
            <li>Asegura el área si hubo una caída, atropello o pelea.</li>
            <li>Evita que otros animales o personas se acerquen.</li>
        </ul>
        <p>
            Solo acércate si el entorno es seguro para ambos.
        </p>
    </section>

    <!-- SECCIÓN 3 -->
    <section class="info-section">
        <h2>🐾 Acércate con cuidado</h2>
        <p>
            Una mascota herida puede morder o arañar por miedo o dolor, incluso si normalmente es tranquila.
        </p>
        <ul>
            <li>Háblale suave y lentamente.</li>
            <li>Evita movimientos bruscos.</li>
            <li>No pongas tu cara cerca de la suya.</li>
            <li>Si es necesario, utiliza una manta para inmovilizar suavemente.</li>
        </ul>
    </section>

    <!-- SECCIÓN 4 -->
    <section class="info-section">
        <h2>❤️ Evalúa los signos vitales</h2>
        <ul>
            <li><strong>Respiración:</strong> observa si el pecho sube y baja.</li>
            <li><strong>Pulso:</strong> puedes sentirlo en la parte interna del muslo.</li>
            <li><strong>Color de encías:</strong> deben ser rosadas y húmedas.</li>
            <li><strong>Temperatura:</strong> si tienes termómetro, rectal, con cuidado.</li>
        </ul>
    </section>

    <!-- SECCIÓN 5 -->
    <section class="info-section">
        <h2>🚑 Llama al veterinario o a urgencias</h2>
        <p>
            Describe los síntomas, cómo sucedió la emergencia y sigue las instrucciones que te indiquen.
            Muchos veterinarios pueden guiarte paso a paso de forma telefónica.
        </p>
    </section>

    <!-- SECCIÓN 6 -->
    <section class="info-section">
        <h2>📦 Administrar primeros auxilios básicos</h2>
        <p>Según la situación, puedes aplicar estas medidas mientras llega ayuda:</p>

        <ul>
            <li><strong>Sangrados:</strong> presionar con gasa o tela limpia sin levantar.</li>
            <li><strong>Golpe de calor:</strong> mover a un lugar fresco y mojar con agua tibia.</li>
            <li><strong>Asfixia:</strong> retirar objetos visibles, nunca profundizar con los dedos.</li>
            <li><strong>Convulsiones:</strong> despejar el área y evitar que se golpee, NO sujetar.</li>
            <li><strong>Tóxicos:</strong> NO inducir el vómito salvo que el veterinario lo indique.</li>
        </ul>
    </section>

    <!-- SECCIÓN 7 -->
    <section class="info-section">
        <h2>🚗 Traslado seguro al veterinario</h2>
        <p>Transporta a tu mascota con cuidado:</p>
        <ul>
            <li>Utiliza una manta o tabla rígida si hay sospecha de fracturas.</li>
            <li>Mantén la cabeza alineada con el cuerpo.</li>
            <li>Evita movimientos bruscos.</li>
            <li>Si está inconsciente, colócala de lado para evitar asfixia.</li>
        </ul>
    </section>

    <!-- SECCIÓN 8 -->
    <section class="info-section">
        <h2>📁 Ten siempre un kit de emergencia</h2>
        <ul>
            <li>Gasas y vendas elásticas.</li>
            <li>Tijeras de punta redonda.</li>
            <li>Guantes desechables.</li>
            <li>Suero fisiológico.</li>
            <li>Manta térmica.</li>
            <li>Termómetro digital.</li>
            <li>Teléfono de tu veterinario y urgencias.</li>
        </ul>
    </section>

</div>

@endsection
