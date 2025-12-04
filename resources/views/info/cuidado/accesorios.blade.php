@extends('layout')

@section('titulo', 'Accesorios Recomendados')

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

    <h1 class="info-page-title">Accesorios Recomendados</h1>

    <p class="intro-text">
        Elegir los accesorios adecuados para tu mascota puede marcar una gran diferencia
        en su comodidad, seguridad y bienestar diario. Desde collares y arneses hasta camas
        y juguetes, cada accesorio cumple un rol importante en su rutina.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🐕 Collares, arneses y correas</h2>
        <p>Son esenciales para pasear de forma segura y cómoda:</p>
        <ul>
            <li><strong>Arnés antitirones:</strong> ideal para perros que jalan al caminar.</li>
            <li><strong>Collar acolchado:</strong> cómodo y seguro para paseos tranquilos.</li>
            <li><strong>Correas extensibles:</strong> permiten más libertad, aunque deben usarse con precaución.</li>
            <li><strong>Identificación:</strong> siempre incluye una placa con nombre y número de teléfono.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🛏 Camas y zonas de descanso</h2>
        <p>
            Un buen lugar para descansar ayuda a prevenir dolores articulares y mejora el
            bienestar emocional.
        </p>
        <ul>
            <li><strong>Camas ortopédicas:</strong> recomendadas para perros mayores o con problemas articulares.</li>
            <li><strong>Almohadones mullidos:</strong> ideales para razas pequeñas o gatos.</li>
            <li><strong>Camas tipo cueva:</strong> perfectas para gatos o animales tímidos que buscan refugio.</li>
            <li><strong>Mantas térmicas:</strong> útiles en invierno o para mascotas frioleras.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🍽 Comederos y bebederos</h2>
        <p>Los accesorios para comer y beber pueden mejorar la salud digestiva y la hidratación:</p>
        <ul>
            <li><strong>Comederos elevados:</strong> ayudan a mejorar la postura al comer.</li>
            <li><strong>Antideslizantes:</strong> evitan que se muevan mientras comen.</li>
            <li><strong>Bebederos automáticos:</strong> garantizan agua fresca todo el día.</li>
            <li><strong>Comederos antiansiedad o "slow feeders":</strong> evitan que coman demasiado rápido.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🧸 Juguetes y enriquecimiento</h2>
        <p>
            Los juguetes no solo entretienen: estimulan la mente y reducen problemas de comportamiento.
        </p>
        <ul>
            <li><strong>Peluche resistente:</strong> para razas que disfrutan cargar objetos.</li>
            <li><strong>Juguetes interactivos:</strong> estimulan la inteligencia (rompecabezas, dispensadores de comida).</li>
            <li><strong>Pelotas y frisbees:</strong> perfectos para ejercicio en exteriores.</li>
            <li><strong>Rascadores para gatos:</strong> previenen daños en muebles y fortalecen sus uñas.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🚗 Accesorios para viajes y transporte</h2>
        <p>
            Transportar a tu mascota con seguridad es fundamental para evitar accidentes y estrés.
        </p>
        <ul>
            <li><strong>Transportines rígidos:</strong> recomendados para gatos o viajes en avión.</li>
            <li><strong>Arneses para el coche:</strong> aumentan la seguridad en trayectos en vehículo.</li>
            <li><strong>Fundas protectoras para asientos:</strong> ideales para perros que sueltan mucho pelo.</li>
            <li><strong>Mochilas o bolsos de transporte:</strong> para mascotas pequeñas o paseos cortos.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🧴 Higiene y mantenimiento</h2>
        <p>Algunos accesorios ayudan a mantener a tu mascota limpia sin esfuerzo:</p>
        <ul>
            <li><strong>Toallitas húmedas para mascotas.</strong></li>
            <li><strong>Guantes de cepillado.</strong></li>
            <li><strong>Champú en seco.</strong></li>
            <li><strong>Cepillos para pelo según tipo de manto.</strong></li>
            <li><strong>Cortaúñas o limas eléctricas.</strong></li>
        </ul>
    </section>

    <!-- Sección 7 -->
    <section class="info-section">
        <h2>💡 Consejos finales</h2>
        <ul>
            <li>Prioriza siempre la seguridad y comodidad antes que la estética.</li>
            <li>Elige materiales resistentes y de buena calidad.</li>
            <li>Si tu mascota destruye juguetes fácilmente, busca productos reforzados.</li>
            <li>Introduce nuevos accesorios de forma gradual para evitar miedo o estrés.</li>
        </ul>
    </section>

</div>

@endsection
