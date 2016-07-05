@extends('plantilla')

@section('title')
    Mapa principal
@endsection

@section('css')
    <link href="{{ asset('assets/css/map.css') }}" rel="stylesheet">
@endsection

@section('top-bar')
    @if($user != null)
        @include('partials.top-bar-user')
    @else
        @include('partials.top-bar-invitado')
    @endif
@endsection

@section('pagina')
    Mapa Principal
@endsection

@section('content')

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="main-map"></div>
                        </div>
                    </div>




@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script>
        $('document').ready(function(){
            function initialize() {

                var styles = [
                    {
                        "stylers": [
                            { "invert_lightness": true },
                            { "saturation": -1 },
                            { "gamma": 0.85 },
                            { "lightness": -26 },
                            { "hue": "#0000ff" }
                        ]
                    }
                ];
                var styledMap = new google.maps.StyledMapType(styles,
                        {name: "Styled Map"});

                var latitud, longitud;
                latitud = 6.25304;
                longitud = -75.56457;

                var mapCanvas = document.getElementById('main-map');

                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(latitud, longitud),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                    }
                    }


                var map = new google.maps.Map(mapCanvas, mapOptions);

                //Associate the styled map with the MapTypeId and set it to display.
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');

                var nombre, infoGrupo, posGrupo;
                var iconMarker = '/assets/images/icon-atlas5.png';

                titulo = "Inicio";


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