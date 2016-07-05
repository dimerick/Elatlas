@extends('new/template')

@section('title')
    Resultados para {{$cadena}}
@endsection

@section('css')

@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
    <div class="row">
        <div class="col-sm-12">

        </div>
    </div>
    @if(count($actividades) > 0)
        @foreach($actividades as $actividad)
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/user/autor/{{$actividad->email}}" class="pull-right">
                        {{$actividad->nombre}}
                        </a> <h4>{{$actividad->titulo}}</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="descrip"><i class="fa fa-calendar"> {{$actividad->fecha}}</i></p>

                            <p class="descrip"><strong>Descripcion: </strong>{{$actividad->descripcion}}</p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">

                            @foreach($fotos as $foto)
                                @if($foto->actividad == $actividad->id)
                                    <img src="/files/actividades/{{$foto->url}}" width="150px" class="pull-left thumbnail">
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/user/publications/{{$actividad->id}}" target="_blank"><h4>Ver publicacion</h4></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        @endforeach
    @else
        <p><h3>Whoops! la busqueda no arrojo resultados</h3></p>
    @endif



@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script>
        $('document').ready(function(){
            function initialize() {

                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(6.314849799999999, -75.5761947),
                    zoom: 18,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);

                var nombre, infoGrupo, latitud, longitud, posGrupo;
                var iconMarker = '/assets/images/icon-atlas.png';

                nombre = 'Atlas del afecto';
                latitud = 6.314849799999999;
                longitud = -75.5761947;


                var posGrupo = new google.maps.LatLng(latitud, longitud);
                var etiquetaGrupo = new google.maps.Marker({
                    position: posGrupo,
                    icon: iconMarker,
                    map: map,
                    title:nombre
                });
            }
            initialize();
        });


    </script>

@endsection