@extends('new/template')

@section('title')
    Edicion Reporte
    @endsection

@section('css')

@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

    @section('content')
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">

                    <div class="panel-heading"> <h4>Edicion Reporte</h4></div>
                    <div class="panel-body">
                        {!! Form::open(['url'=> '/admin/reports/update', 'method' => 'POST']) !!}

                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$datos['id']}}">
                        </div>

                        <div class="form-group">
                            <label for="titulo">Titulo Actividad *</label>
                            <input type="text" value="{{$datos['titulo']}}" class="form-control" id="titulo" name="titulo" placeholder="Indique un titulo para la actividad">
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha *</label>
                            <input type="date" value="{{$datos['fecha']}}" class="form-control" id="fecha" name="fecha">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion *</label>
                            <textarea required cols="75" rows="7" id="descripcion" name="descripcion" class="form-control">{{$datos['descripcion']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Ubicacion *</label>
                            <input type="hidden" class="form-control" id="latitud" name="latitud" value="{{$datos['latitud']}}">
                            <input type="hidden" class="form-control" id="longitud" name="longitud" value="{{$datos['longitud']}}">


                            <div id="map"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" id="submit">Actualizar</button>
                        </div>


                        {!! Form::close() !!}



                    </div>
                </div>

            </div>
        </div>

@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script>
        $('document').ready(function(){
            function initialize() {
                var lat = $('#latitud').attr("value");
                var long = $('#longitud').attr("value");
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(lat, long),
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions);
                infoWindow = new google.maps.InfoWindow();


                var nombre, infoGrupo, posGrupo;
                var iconMarker = '/assets/images/icon-atlasAnt.png';


                var posGrupo = new google.maps.LatLng(lat, long);

                var marker = new google.maps.Marker({
                    position: posGrupo,
                    draggable: true,
                    icon: iconMarker,
                    map: map,
                });
                google.maps.event.addListener(marker, 'dragend', function(){

                    var latitud, longitud, markerPos;
                    markerPos = this.getPosition();
                    latitud = markerPos.lat();
                    longitud = markerPos.lng();
                    $('#latitud').attr("value", latitud);
                    $('#longitud').attr("value", longitud);

                });
            }
            initialize();
        });
    </script>
@endsection