@extends('new/template')

@section('title')
    Post {{$datos[0]->titulo}}
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
        <div class="panel panel-primary">
                <div class="panel-heading"><h4><i class="fa fa-flag"></i> {{$datos[0]->titulo}}</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="descrip"><i class="fa fa-calendar"> <strong>{{$datos[0]->fecha}}</strong></i> |
                                <i class="fa fa-user"> <a href="/autor/{{$datos[0]->email}}">
                                        {{$datos[0]->nombre}}
                                    </a></i>
                            </p>

                            <p class="descrip"><strong>Descripcion: </strong>{{$datos[0]->descripcion}}</p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">

                            @foreach($fotos as $foto)

                                    <a href="/files/actividades/{{$foto->url}}" data-lightbox="{{$datos[0]->titulo}}" data-title="{{$datos[0]->titulo}}"><img src="/files/actividades/{{$foto->url}}" width="150px" class="pull-left thumbnail"></a>

                            @endforeach

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" id="latitud" value="{{$datos[0]->latitud}}">
                            <input type="hidden" id="longitud" value="{{$datos[0]->longitud}}">
                            <input type="hidden" id="titulo" value="{{$datos[0]->titulo}}">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>




@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script>
        $('document').ready(function(){
            function initialize() {
                var latitud, longitud;
                latitud = $('#latitud').attr("value");
                longitud = $('#longitud').attr("value");

                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(latitud, longitud),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);

                var nombre, infoGrupo, posGrupo;
                var iconMarker = '/assets/images/icon-atlasAnt.png';

                titulo = $("#titulo").attr("value");


                var posGrupo = new google.maps.LatLng(latitud, longitud);
                var etiquetaGrupo = new google.maps.Marker({
                    position: posGrupo,
                    icon: iconMarker,
                    map: map,
                    title:titulo
                });
            }
            initialize();
        });


    </script>

@endsection