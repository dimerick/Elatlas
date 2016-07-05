@extends('new/template2')

@section('title')
    Actividades registradas
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
    <div id="map-activities"></div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>

    <script>
        $('document').ready(function() {

            var alto = $(window).height();
            alto += 3;
            $("#map-activities").css("height", alto);
            $("#map-activities").css("width", "100%");

            var actividades = new Array();


            /*defino la clase grupo, la clase representa la informacion de cada grupo y sus coordenadas*/
            function actividad(id, titulo, latitud, longitud, infoActividad) {
                this.id = id;
                this.titulo = titulo;
                this.latitud = Number(latitud);
                this.longitud = Number(longitud);
                this.infoActividad = infoActividad;

                this.getId = function() {
                    return this.id;
                };
                this.getTitulo = function() {
                    return this.titulo;
                };

                this.getLatitud = function() {
                    return this.latitud;
                };
                this.getLongitud = function() {
                    return this.longitud;
                };
                this.getInfoActividad = function() {
                    return this.infoActividad;
                };
            }

            function punto(latitud, longitud) {
                this.lat = latitud;
                this.lng = longitud;
            }


            function initialize() {

                var mapCanvas = document.getElementById('map-activities');
                var mapOptions = {
                    center: new google.maps.LatLng(6.25304, -75.56457),
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var i;
                var num = actividades.length;

                var id, titulo, latitud, longitud, posActividad, infoActividad;
                var idAnt, tituloAnt, latitudAnt, longitudAnt;
                var puntosLine = new Array();
                var p;
                var arrayIcons = ["/assets/images/icons/icon-atlas0.png", "/assets/images/icons/icon-atlas1.png", "/assets/images/icons/icon-atlas2.png", "/assets/images/icons/icon-atlas3.png", "/assets/images/icons/icon-atlas4.png", "/assets/images/icons/icon-atlas5.png", "/assets/images/icons/icon-atlas6.png", "/assets/images/icons/icon-atlas7.png", "/assets/images/icons/icon-atlas8.png"];
                var colors = ["#3366FF", "#33CC33", "#FF33CC", "#F0164C", "#CC00CC", "#CC4100", "#00CC99", "#995809", "#D9B604"];
                var indexColor = 0;
                var iconMarker;

                for (i = 0; i < num; i++) {
                    id = actividades[i].getId();
                    titulo = actividades[i].getTitulo();
                    latitud = actividades[i].getLatitud();
                    longitud = actividades[i].getLongitud();
                    infoActividad = actividades[i].getInfoActividad();

                    if (i == 0) {
                        tituloAnt = titulo;
                    }
                    p = new punto(latitud, longitud);
                    var color = colors[indexColor];

                    if (titulo != tituloAnt) {
                        var lineaActividad = new google.maps.Polyline({
                            path: puntosLine,
                            map: map,
                            geodesic: true,
                            strokeColor: color,
                            strokeOpacity: 1.0,
                            strokeWeight: 2
                        });
                        indexColor++;
                        if (indexColor == colors.length) {
                            indexColor = 0;
                        }
                        puntosLine = [];
                        puntosLine.push(p);

                    } else {
                        puntosLine.push(p);
                    }
                    iconMarker = arrayIcons[indexColor];
                    posActividad = new google.maps.LatLng(latitud, longitud);
                    var etiquetaActividad = new google.maps.Marker({
                        position: posActividad,
                        icon: iconMarker,
                        map: map,
                        title: titulo,
                        content: infoActividad
                    });

                    etiquetaActividad.addListener('click', function() {
                        var infowindow = new google.maps.InfoWindow({
                            content: this.content
                        });
                        infowindow.open(map, this);
                    });

                    tituloAnt = titulo;
                    latitudAnt = latitud;
                    longitudAnt = longitud;
                }
                var color = colors[indexColor];
                var lineaActividad = new google.maps.Polyline({
                    path: puntosLine,
                    map: map,
                    geodesic: true,
                    strokeColor: color,
                    strokeOpacity: 1.0,
                    strokeWeight: 2
                });
            }

            $.ajax({
                url: '/activities',
                type: 'get',
                success: function(data) {
                    console.log(data);
                    if(data.length > 0){
                        var a, infoActividad;
                        var idAnt, fechaRegAnt, tituloAnt, latitudAnt, longitudAnt;
                        var id, nombre, fechaReg, titulo, fecha, descripcion, latitud, longitud, url;
                        for(var i= 0; i < data.length; i++) {
                            id = data[i].id;
                            email = data[i].email;
                            nombre = data[i].nombre;
                            fechaReg = data[i].created_at;
                            titulo = data[i].titulo;
                            fecha = data[i].fecha;
                            descripcion = decodeURI(data[i].descripcion);
                            latitud = data[i].latitud;
                            longitud = data[i].longitud;
                            url = data[i].url;
                            if (i == 0) {

                                infoActividad = "<table class=\"table table-hover col-md-12\"><tbody>";
                                infoActividad += "<tr><th>Autor</th><td>" + "<a href=\"/autor/"+ data[i].email +"\" target=\"_blank\">" + nombre + "</a> </td></tr>";
                                infoActividad += "<tr><th>Fecha Registro</th><td>" + fechaReg + "</td></tr>";
                                infoActividad += "<tr><th>Titulo</th><td>" + "<a href=\"/publications/"+ id +"\" target=\"_blank\">" + titulo + "</a> </td></tr>";
                                infoActividad += "<tr><th>Fecha</th><td>" + fecha + "</td></tr>";
                                infoActividad += "<tr><th>Descripcion</th><td>" + descripcion + "</td></tr>";
                                infoActividad += "<tr><th>Latitud</th><td>" + latitud + "</td></tr>";
                                infoActividad += "<tr><th>Longitud</th><td>" + longitud + "</td></tr>";
                                infoActividad += "<tr><td colspan=\"2\">";
                                infoActividad += "<a href=/files/actividades/" + url + " data-lightbox=\"" + data[i].created_at + "\" data-title=\"" + data[i].titulo + "\"><img width=\"30%\" src=/files/actividades/" + url + "></a>";
                            } else {

                                if ((fechaReg != fechaRegAnt) || (latitud != latitudAnt) || (longitud != longitudAnt)) {
                                    infoActividad += "</tr></td></tbody></table>";

                                    a = new actividad(idAnt, tituloAnt, latitudAnt, longitudAnt, infoActividad);
                                    actividades.push(a);

                                    infoActividad = "<table class=\"table table-hover col-md-12\"><tbody>";
                                    infoActividad += "<tr><th>Autor</th><td>" + "<a href=\"/autor/"+ data[i].email +"\" target=\"_blank\">" + nombre + "</a> </td></tr>";
                                    infoActividad += "<tr><th>Fecha Registro</th><td>" + fechaReg + "</td></tr>";
                                    infoActividad += "<tr><th>Titulo</th><td>" + "<a href=\"/publications/"+ id +"\" target=\"_blank\">" + titulo + "</a> </td></tr>";
                                    infoActividad += "<tr><th>Fecha</th><td>" + fecha + "</td></tr>";
                                    infoActividad += "<tr><th>Descripcion</th><td>" + descripcion + "</td></tr>";
                                    infoActividad += "<tr><th>Latitud</th><td>" + latitud + "</td></tr>";
                                    infoActividad += "<tr><th>Longitud</th><td>" + longitud + "</td></tr>";
                                    infoActividad += "<tr><td colspan=\"2\">";
                                    infoActividad += "<a href=/files/actividades/" + url + " data-lightbox=\"" + data[i].created_at + "\" data-title=\"" + data[i].titulo + "\"><img width=\"30%\" src=/files/actividades/" + url + "></a>";
                                } else {
                                    infoActividad += "<a href=/files/actividades/" + url + " data-lightbox=\"" + data[i].created_at + "\" data-title=\"" + data[i].titulo + "\"><img width=\"30%\" src=/files/actividades/" + url + "></a>";
                                }
                            }
                            idAnt = id;
                            fechaRegAnt = fechaReg;
                            tituloAnt = titulo;
                            latitudAnt = latitud;
                            longitudAnt = longitud

                        }
                        infoActividad += "</tr></td></tbody></table>";
                        a = new actividad(idAnt, tituloAnt, latitudAnt, longitudAnt, infoActividad);
                        actividades.push(a);
                    }
                        initialize();


                }
            });

        });



    </script>

@endsection