@extends('new/template')

@section('title')
    Publicaciones
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
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
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a href="/publications/{{$actividad->id}}" target="_blank"> <h4><i class="fa fa-flag"></i> {{$actividad->titulo}}</h4></a>

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="descrip"><i class="fa fa-calendar"> <strong>{{$actividad->fecha}}</strong></i> |

                                <i class="fa fa-user"> <a href="/autor/{{$actividad->grupo}}">
                                        @foreach($cuentas as $cuenta)
                                            @if($cuenta->email == $actividad->grupo)
                                                <strong>{{$cuenta->nombre}}</strong>
                                            @endif
                                        @endforeach
                                    </a>    </i>
                            </p>

                            <p class="descrip"><b>Descripcion: </b>{{$actividad->descripcion}}</p>
                            <p></p>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">

                            @foreach($fotos as $foto)
                                @if($foto->actividad == $actividad->id)
                                    <a href="/files/actividades/{{$foto->url}}" data-lightbox="{{$actividad->titulo}}" data-title="{{$actividad->titulo}}"><img src="/files/actividades/{{$foto->url}}" width="40%" class="pull-left thumbnail"></a>
                                @endif
                            @endforeach

                        </div>
                    </div>

                </div>
                </div>
        @endforeach
    @else
        <div class="alert alert-info" role="alert"><h4>Whoops! al parecer aun no hay publicaciones</h4></div>
    @endif



@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
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