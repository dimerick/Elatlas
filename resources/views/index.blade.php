@extends('plantilla')

@section('title')
Quienes somos
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
    Quienes somos
@endsection

@section('content')


                    <h1>¿Qué es el Atlas del Afecto?</h1>
                    <p>El Atlas es proceso social basado en los postulados de la cartografía crítica, la cual imagina nuevas conexiones entre grupos comunitarios de base en diferentes países.  Los grupos comunitarios de base son los potenciadores de la transformación social. Este proceso es a la vez vivido (corporal) y digital (online). Como proceso social, el Atlas busca posibilitar nuevas visiones de los diversos significados de la transformación social a través de la generación de diálogos con y entre diferentes grupos comunitarios de base, y por la recolección de información sobre sus proyectos, lugares, motivaciones y redes. El Atlas busca facilitar nuevas conexiones entre grupos en dos vías: desde actividades en lugares específicos y desde una plataforma online para la comunicación. El atlas busca hacer nuevas creaciones en forma de mapas, imágenes, visualizaciones y narrativas las cuales cuentan las historias de las transformaciones sociales colectivas formadas por los grupos en el atlas, y busca compartir esas creaciones personalmente y online (en la galería). Y, finalmente, el Atlas reconoce el potencial afectivo de las resistencias y resiliencias demostradas por estos grupos para afrontar las opresiones sociales, económicas,  ecológicas.</p>

                    <h1>¿Quien conforma el Atlas del Afecto?</h1>
                    <p>El Atlas es en si mismo una red en crecimiento compuesta por grupos comunitarios de base los cuales participan habitualmente en procesos locales y regionales para mejorar las condiciones de vida de las comunidades, trabajar por la justicia social, mitigar riesgos para la salud y la seguridad humana, y construir paz y la protección ambiental. El equipo actual del Atlas esta conformado por jóvenes activistas sociales, artistas, estudiantes y profesores de Medellín, Colombia, y de Philadelphia Pennsylvania, U.S.A,  Las actuales prioridades del equipo del atlas son: educación popular, justicia social, justicia ambiental, y cultura política.</p>

                    <h1>¿Quienes pueden Participar?</h1>
                    <p>Todas las personas, grupos de base comunitaria, y organizaciones interesadas y comprometidas con la transformación social.</p>

                    <h1>¿Como Participar?</h1>
                    <p>La forma más fácil de participar es registrar tu grupo crear un perfil y compartir las actividades y procesos que están realizando. Otra manera de participar es colaborar con el equipo de atlas del afecto para generar mapas temáticos en formatos digitales (usando sistemas de información geográfica) o través de cartografías alternativas como las realizadas a través de expresiones artísticas. Te invitamos a crear tu perfil en nuestra web.</p>

                    <h1>¿Dónde está el Atlas del Afecto?</h1>
                    <p>Nosotros comenzamos en Medellín Colombia, porque la ciudad tiene muchas ideas y ejemplos de resistencia para difundir.  El Atlas esta creciendo y esperemos que llegue a muchos lugares del mundo.</p>

                    <h1>¿Por que participar en el Atlas del Afecto?</h1>
                    <p>El atlas permitirá que los grupos comunitarios de base construyan nuevas conexiones con grupos que realizan un trabajo similar no solo en Medellín sino en Colombia y otras partes del mundo. Estas conexiones pueden permitir nuevos flujos de ideas, recursos y formas alternativas de poder en solidaridad con otros grupos. También, el atlas generara nuevas ideas para producir conocimiento sobre las relaciones entre comunidades, territorio y espacio.</p>



                    <h1>Ubicacion Grupos registrados</h1>
                    <div id="main-map"></div>

                    @if($user == null)
                        </br>
                        <p><a href="/grupos/create" class="btn btn-danger" role="button">Registrarse</a></p>
                    @endif


<!-- END CONTENT WRAPPER -->
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

                var mapCanvas = document.getElementById('main-map');

                var mapOptions = {
                    zoom: 8,
                    mapTypeControl: false,
                    streetViewControl: false,
                    zoomControlOptions: {
                        position: google.maps.ControlPosition.TOP_LEFT
                    },
                    center: new google.maps.LatLng(6.25304, -75.56457),
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                    }
                }


                var map = new google.maps.Map(mapCanvas, mapOptions);

                //Associate the styled map with the MapTypeId and set it to display.
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');

                $.ajax({
                    url:   'groups-register',
                    type:  'get',
                    beforeSend: function () {
                        console.log("Procesando, espere por favor...");
                    },
                    success: function (data) {
                        console.log(data);
                        if(data.length > 0){
                            var latitud, longitud;
                            var nombre, infoGrupo, posGrupo;
                            var iconMarker = '/assets/images/icon-atlas5.png';
                            for(var i= 0; i < data.length; i++){
                                latitud = data[i].latitud;
                                longitud = data[i].longitud;
                                nombre = data[i].nombre;
                                var posGrupo = new google.maps.LatLng(latitud, longitud);

                                var infoGrupo = "<div><h4>"+data[i].nombre+"</h4><hr><img width='40%' src='/files/"+data[i].foto+"'></img></div>";
                                console.log(infoGrupo);
                                var etiquetaGrupo = new google.maps.Marker({
                                    position: posGrupo,
                                    icon: iconMarker,
                                    map: map,
                                    title:nombre,
                                    content: infoGrupo
                                });
                                etiquetaGrupo.addListener('click', function(){
                                    var infowindow = new google.maps.InfoWindow({
                                        content: this.content
                                    });
                                    infowindow.open(map, this);
                                });
                            }
                        }else{
                            alert("No hay grupos registrados");
                        }

                    },
                    error: function(jqXHR, text){
                        console.log(jqXHR);
                        console.log(text);
                    }
                });


            }
            initialize();
        });


    </script>

@endsection