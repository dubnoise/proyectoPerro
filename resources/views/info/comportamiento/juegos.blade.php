@extends('layout')

@section('titulo', 'Juegos y Estimulación')

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

    <h1 class="info-page-title">Juegos y Estimulación para tu Mascota</h1>

    <p class="intro-text">
        El juego y la estimulación mental son esenciales para mantener a tu mascota sana,
        equilibrada y feliz. No solo ayudan a gastar energía, sino que previenen problemas
        de comportamiento y fortalecen el vínculo con sus dueños.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🎾 ¿Por qué es importante jugar?</h2>
        <p>
            El juego tiene múltiples beneficios:
        </p>
        <ul>
            <li>Evita el aburrimiento y el estrés.</li>
            <li>Mejora la salud física y mental.</li>
            <li>Refuerza el aprendizaje y la obediencia.</li>
            <li>Fortalece la relación entre mascota y dueño.</li>
            <li>Fomenta la socialización con otros animales.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>🐕 Juegos recomendados para perros</h2>
        <ul>
            <li><strong>Buscar la pelota</strong>: clásico, ayuda a liberar energía.</li>
            <li><strong>Tirar y aflojar</strong>: fortalece músculos y autocontrol.</li>
            <li><strong>Escondite</strong>: estimula mente y olfato.</li>
            <li><strong>Juguetes interactivos</strong>: rompecabezas o Kongs con premios.</li>
            <li><strong>Paseos variados</strong>: cambiar rutas estimula sus sentidos.</li>
        </ul>
        <p>Evita juegos demasiado bruscos si tu perro se excita con facilidad.</p>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>🐱 Juegos recomendados para gatos</h2>
        <ul>
            <li><strong>Cañas con plumas</strong> para despertar su instinto cazador.</li>
            <li><strong>Láser</strong> (con moderación) para ejercicio aeróbico.</li>
            <li><strong>Pelotas pequeñas</strong> o ratones de juguete.</li>
            <li><strong>Cajas y túneles</strong> para explorar y esconderse.</li>
            <li><strong>Rascadores y torres</strong> para trepar y liberar estrés.</li>
        </ul>
        <p>
            Recuerda alternar juguetes para que no pierdan interés.
        </p>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🧠 Estimulación mental</h2>
        <p>La mente también necesita ejercicio. Algunos métodos son:</p>
        <ul>
            <li>Juguetes con compartimentos donde esconder premios.</li>
            <li>Aprendizaje de nuevas órdenes o trucos.</li>
            <li>Actividades de olfato como “buscar el premio”.</li>
            <li>Rotación semanal de juguetes.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🏡 Enriquecimiento ambiental</h2>
        <p>
            Tu hogar puede convertirse en un entorno lleno de estímulos:
        </p>
        <ul>
            <li>Colocar plataformas o estantes altos (para gatos).</li>
            <li>Crear circuitos o zonas de juego.</li>
            <li>Dejar juguetes accesibles cuando estés fuera.</li>
            <li>Ofrecer materiales seguros para morder (perros).</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>⏱ ¿Cuánto tiempo de juego necesitan?</h2>
        <ul>
            <li><strong>Perros adultos</strong>: 30-60 minutos diarios.</li>
            <li><strong>Cachorros</strong>: sesiones cortas pero frecuentes.</li>
            <li><strong>Gatos</strong>: 10-20 minutos en varias sesiones.</li>
        </ul>
        <p>
            Cada animal es diferente. Observa su energía y ajusta las actividades.
        </p>
    </section>

</div>

@endsection
