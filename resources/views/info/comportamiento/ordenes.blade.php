@extends('layout')

@section('titulo', 'Órdenes Básicas')

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

    <h1 class="info-page-title">Órdenes Básicas para tu Mascota</h1>

    <p class="intro-text">
        Enseñar órdenes básicas ayuda a mejorar la convivencia, fortalece tu vínculo con tu mascota
        y facilita su seguridad. A continuación, encontrarás las órdenes fundamentales y cómo enseñarlas
        de forma correcta y positiva.
    </p>

    <!-- Sección 1 -->
    <section class="info-section">
        <h2>🐾 “Sentado”</h2>
        <p>
            Una de las órdenes más útiles y fáciles de enseñar.
            Pasos:
        </p>
        <ul>
            <li>Sostén un premio cerca de su hocico.</li>
            <li>Muévelo lentamente hacia arriba para que su cuerpo baje.</li>
            <li>En cuanto se siente, di “sentado” y dale el premio.</li>
            <li>Repite sesiones cortas para reforzarlo.</li>
        </ul>
    </section>

    <!-- Sección 2 -->
    <section class="info-section">
        <h2>⛔ “Quieto”</h2>
        <p>
            Esta orden ayuda a controlar impulsos y evitar accidentes.
            Cómo enseñarla:
        </p>
        <ul>
            <li>Pídele que se siente o se acueste.</li>
            <li>Muestra la palma de tu mano mientras dices “quieto”.</li>
            <li>Retrocede un paso. Si no se mueve, recompénsalo.</li>
            <li>Aumenta progresivamente la distancia y la duración.</li>
        </ul>
    </section>

    <!-- Sección 3 -->
    <section class="info-section">
        <h2>👣 “Ven”</h2>
        <p>
            Fundamental para mantener su seguridad, especialmente en exteriores.
        </p>
        <ul>
            <li>Empieza en un ambiente sin distracciones.</li>
            <li>Llámalo con voz alegre mientras dices su nombre + “ven”.</li>
            <li>Cuando vaya hacia ti, prémialo con comida o caricias.</li>
            <li>No lo castigues nunca si tarda en llegar, podría asociar la orden con algo negativo.</li>
        </ul>
    </section>

    <!-- Sección 4 -->
    <section class="info-section">
        <h2>🚶 “Junto”</h2>
        <p>
            Enseña a caminar sin tirar de la correa.
            Técnica:
        </p>
        <ul>
            <li>Camina con la correa corta pero sin tensión.</li>
            <li>Premia cuando se mantenga a tu lado.</li>
            <li>Si tira, detente y no avances hasta que regrese a tu posición.</li>
            <li>Repite frecuentemente en paseos cortos.</li>
        </ul>
    </section>

    <!-- Sección 5 -->
    <section class="info-section">
        <h2>🛑 “No” o “Suéltalo”</h2>
        <p>
            Estas órdenes son esenciales para evitar que tu mascota muerda o coma cosas peligrosas.
        </p>
        <ul>
            <li>Mantén un juguete o premio en tu mano cerrada.</li>
            <li>Cuando intente tomarlo, di “no” o “suéltalo”.</li>
            <li>En cuanto se aleje, prémialo con otro objeto o snack permitido.</li>
            <li>No uses gritos ni castigos físicos.</li>
        </ul>
    </section>

    <!-- Sección 6 -->
    <section class="info-section">
        <h2>🎉 Consejos Generales para las Órdenes</h2>
        <ul>
            <li>Haz sesiones cortas: 5-10 minutos.</li>
            <li>Entrena todos los días para reforzar.</li>
            <li>Usa siempre refuerzo positivo.</li>
            <li>Ten paciencia, cada mascota aprende a su ritmo.</li>
        </ul>
    </section>

</div>

@endsection
