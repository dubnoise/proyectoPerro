@extends('layout')

@section('titulo', 'Limpieza General')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/info/info-detail.css') }}">
@endsection

@section('contenido')

<header>
    @include('partials.header')
</header>

<div class="info-page-container">

    <!-- Botón Volver -->
    <a href="{{ route('info') }}" class="back-btn">⬅ Volver</a>

    <h1 class="info-page-title">Limpieza General</h1>

    <p class="intro-text">
        La limpieza general de tu mascota es una parte clave para mantener su salud, comodidad
        y bienestar. No solo ayuda a prevenir infecciones y malos olores, sino que también te permite
        detectar a tiempo cualquier anomalía en su piel, orejas, ojos o dientes.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🧼 ¿Qué implica la limpieza general?</h2>
        <p>Incluye varias rutinas esenciales:</p>
        <ul>
            <li>Limpieza de ojos y legañas.</li>
            <li>Limpieza de oídos.</li>
            <li>Mantenimiento dental.</li>
            <li>Cuidado de almohadillas.</li>
            <li>Higiene del área genital y anal.</li>
        </ul>
        <p>
            Estas rutinas no requieren mucho tiempo y ayudan a mantener a tu mascota en perfectas condiciones.
        </p>
    </section>

    <!-- Sección 2: Ojos -->
    <section class="info-section">
        <h2>👁 Limpieza de ojos</h2>
        <p>Las secreciones o legañas son normales, pero deben limpiarse adecuadamente:</p>
        <ul>
            <li>Usa gasas húmedas con agua tibia o suero fisiológico.</li>
            <li>Limpia suavemente desde el lagrimal hacia afuera.</li>
            <li>
                Evita usar algodón, ya que puede dejar pelusas y causar irritación.
            </li>
            <li>
                Si las legañas son amarillentas, abundantes o malolientes, consulta a un veterinario.
            </li>
        </ul>
    </section>

    <!-- Sección 3: Oídos -->
    <section class="info-section">
        <h2>👂 Limpieza de oídos</h2>
        <p>
            Los oídos son zonas delicadas donde pueden acumularse cera, suciedad o humedad,
            lo que origina infecciones.
        </p>
        <ul>
            <li>Usa limpiadores óticos específicos para mascotas.</li>
            <li>Aplica el producto siguiendo las indicaciones del envase.</li>
            <li>Mueve suavemente la base de la oreja para ayudar a desprender la suciedad.</li>
            <li>Retira el exceso con una gasa, sin introducir objetos en el canal auditivo.</li>
            <li>Evita limpiar en exceso; una vez cada 1–2 semanas es suficiente.</li>
        </ul>
        <p><strong>Mal olor, rascado constante o enrojecimiento son señales de alerta.</strong></p>
    </section>

    <!-- Sección 4: Dientes -->
    <section class="info-section">
        <h2>🦷 Higiene dental</h2>
        <p>
            La higiene dental es fundamental para prevenir enfermedades periodontales, mal aliento
            y dolor al comer.
        </p>
        <ul>
            <li>Cepilla los dientes 2–3 veces por semana con pasta especial para mascotas.</li>
            <li>
                Usa cepillos suaves o dedales de silicona para facilitar la limpieza.
            </li>
            <li>
                Complementa con snacks dentales o juguetes masticables.
            </li>
            <li>
                Evita usar pasta dental para humanos: contiene flúor y es tóxica para ellos.
            </li>
        </ul>
        <p>
            Para acumulaciones severas de sarro, un veterinario debe realizar una limpieza profesional.
        </p>
    </section>

    <!-- Sección 5: Almohadillas y patas -->
    <section class="info-section">
        <h2>🐾 Limpieza de almohadillas y patas</h2>
        <p>
            Las patas están en contacto continuo con el suelo, por lo que requieren atención frecuente.
        </p>
        <ul>
            <li>
                Limpia las almohadillas con toallitas húmedas aptas para mascotas o agua tibia.
            </li>
            <li>
                Revisa si hay grietas, heridas o espigas entre los dedos.
            </li>
            <li>
                Hidrata con productos especiales si están resecas.
            </li>
            <li>
                Después de paseos en zonas sucias o con nieve, limpia siempre las patas.
            </li>
        </ul>
    </section>

    <!-- Sección 6: Zona genital y anal -->
    <section class="info-section">
        <h2>🚿 Higiene de la zona genital y anal</h2>
        <p>
            Esta zona puede acumular suciedad, secreciones o restos de heces,
            especialmente en mascotas de pelo largo.
        </p>
        <ul>
            <li>Recorta el pelo alrededor si se ensucia con facilidad.</li>
            <li>Usa toallitas húmedas sin fragancia o agua tibia.</li>
            <li>Realiza la limpieza con suavidad para evitar irritaciones.</li>
            <li>
                Si tu mascota arrastra el trasero por el suelo, podría ser un problema de glándulas anales.
            </li>
        </ul>
    </section>

    <!-- Sección 7 -->
    <section class="info-section">
        <h2>⚠ Señales de problemas de higiene</h2>
        <p>Consulta al veterinario si notas:</p>
        <ul>
            <li>Mal olor persistente.</li>
            <li>Enrojecimiento o secreciones en ojos u oídos.</li>
            <li>Encías inflamadas o sangrado dental.</li>
            <li>Heridas en almohadillas.</li>
            <li>Irritación o inflamación en la zona genital.</li>
        </ul>
    </section>

</div>

@endsection
