@extends('new/template2')

@section('title')
    Grupos Registrados
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
    <div id="main-map"></div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assets/new/js/main-map.js') }}"></script>


@endsection