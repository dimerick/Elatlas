@extends('v2/template')

@section('title')
    Atlas del afecto
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/v2/css/map.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/v2/css/Control.FullScreen.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')
    <input type="hidden" id="page-active" for="#li-activities">
    <div id="v2-map">

    </div>

@endsection

@section('scripts')
    <script src="{{ asset('assets/v2/js/mapAct.js') }}"></script>
    <script src="{{ asset('assets/v2/js/Control.FullScreen.js') }}"></script>
@endsection