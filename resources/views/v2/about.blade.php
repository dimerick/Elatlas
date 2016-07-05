@extends('v2/template')

@section('title')
    Atlas del afecto
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/v2/css/map.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

    <section id="about">
        <h3>Quienes somos</h3>
        <p>Somos una plataforma que conecta los procesos sociales alrededor del mundo, a traves de la geografia, promoviendo la participacion y la generacion de conocimiento en diversos temas</p>
        <br>
        <h3>¿Como?</h3>
        <ul>
            <li>Vivencial:  Posibilitamos el intercambio de saberes para potencializaar el quehacer y sentir de los procesos sociales desde su propia experiencia.</li>
            <li>Investigativo: Promovemos la generacion de conocimiento conectando los procesos sociales, academicos y expertos para la transformacion social </li>
            <li>Educativo: Fomentamos el desarrollo de procesos formativos para crear conciencia alrededor de las relaciones entre el ser humano y su entorno</li>
        </ul>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('assets/v2/js/map.js') }}"></script>
@endsection