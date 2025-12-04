@extends('layout')

@section('titulo', 'Otras Especies')

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

    <h1 class="info-page-title">Otras Especies — Características y Cuidados</h1>

    <p class="intro-text">
        Además de perros y gatos, muchas otras especies son excelentes compañeros. Cada una tiene
        necesidades particulares en cuanto a alimentación, cuidados, ambiente y socialización.
        Aquí encontrarás información general sobre algunas de las especies más populares como mascotas.
    </p>

    <!-- CONEJOS -->
    <section class="info-section">
        <h2>🐇 Conejos</h2>
        <p>
            Son animales sociables, inteligentes y muy sensibles a su entorno. Requieren espacio,
            una dieta rica en fibra y cuidados especiales.
        </p>
        <ul>
            <li><strong>Personalidad:</strong> curiosos, tranquilos y cariñosos cuando se socializan bien.</li>
            <li><strong>Alimentación:</strong> heno ilimitado, verduras frescas y pienso especializado.</li>
            <li><strong>Cuidados:</strong> necesitan espacio para correr, evitar estrés y corrientes de aire.</li>
            <li><strong>Razas comunes:</strong> Enano, Belier, Cabeza de León.</li>
        </ul>
    </section>

    <!-- AVES -->
    <section class="info-section">
        <h2>🦜 Aves de compañía</h2>
        <p>
            Desde periquitos hasta loros, las aves son sociales, activas y requieren estimulación constante.
        </p>
        <ul>
            <li><strong>Personalidad:</strong> pueden crear fuertes vínculos con las personas.</li>
            <li><strong>Alimentación:</strong> semillas, frutas, verduras y alimentos específicos para la especie.</li>
            <li><strong>Cuidados:</strong> jaulas amplias, juguetes y tiempo fuera de la jaula.</li>
            <li><strong>Especies comunes:</strong> periquitos, ninfas, agapornis, loros.</li>
        </ul>
    </section>

    <!-- ROEDORES -->
    <section class="info-section">
        <h2>🐹 Roedores pequeños</h2>
        <p>
            Son mascotas ideales para espacios reducidos, fáciles de manejar y generalmente de bajo mantenimiento.
        </p>
        <ul>
            <li><strong>Hámsters:</strong> solitarios, nocturnos y muy activos.</li>
            <li><strong>Cobayas:</strong> sociales, necesitan vivir en pareja y comer vitamina C a diario.</li>
            <li><strong>Chinchillas:</strong> muy activas, requieren baños de arena.</li>
            <li><strong>Ratas domésticas:</strong> muy inteligentes y cariñosas.</li>
        </ul>
    </section>

    <!-- REPTILES -->
    <section class="info-section">
        <h2>🦎 Reptiles</h2>
        <p>
            Mascotas tranquilas que requieren cuidados específicos de temperatura, humedad y luz.
        </p>
        <ul>
            <li><strong>Geckos Leopardos:</strong> fáciles para principiantes, insectívoros.</li>
            <li><strong>Iguanas:</strong> necesitan mucho espacio y control rígido de temperatura.</li>
            <li><strong>Tortugas:</strong> longevas, requieren terrario adecuado y dieta variada.</li>
            <li><strong>Serpientes:</strong> como la pitón bola, dócil y de mantenimiento moderado.</li>
        </ul>
    </section>

    <!-- PECES -->
    <section class="info-section">
        <h2>🐠 Peces de acuario</h2>
        <p>
            De bajo contacto directo pero altamente relajantes, requieren mantenimiento constante del agua.
        </p>
        <ul>
            <li><strong>Acuarios:</strong> balance químico correcto, filtración y temperatura.</li>
            <li><strong>Especies comunes:</strong> bettas, goldfish, guppys, peces ángel.</li>
            <li><strong>Cuidados:</strong> evitar sobrealimentación y cambios bruscos de agua.</li>
        </ul>
    </section>

    <!-- ANIMALES EXÓTICOS -->
    <section class="info-section">
        <h2>🕷 Mascotas exóticas</h2>
        <p>
            Algunas especies requieren permisos especiales y cuidados avanzados.
        </p>
        <ul>
            <li><strong>Hurones:</strong> muy activos, juguetones y curiosos.</li>
            <li><strong>Erizos:</strong> sensibles a temperaturas bajas, necesitan dieta especializada.</li>
            <li><strong>Tarántulas:</strong> de bajo mantenimiento, pero requieren terrario ajustado a la especie.</li>
            <li><strong>Perros de la pradera:</strong> sociables, necesitan grandes espacios.</li>
        </ul>
    </section>

</div>

@endsection
