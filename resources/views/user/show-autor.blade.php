@extends('new/template')

@section('title')
    Atlas del afecto
@endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('pagina')
    Perfil {{$cuenta[0]->nombre}}
@endsection

@section('content')
        <div class="panel panel-primary">
                <div class="panel-heading"> <h4><i class="fa fa-user"> </i> {{$cuenta[0]->nombre}}</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/files/{{$cuenta[0]->foto}}" data-lightbox="{{$cuenta[0]->nombre}}" data-title="{{$cuenta[0]->nombre}}"><img src="/files/{{$cuenta[0]->foto}}" width="40%" class="thumbnail photo-profile"></a>

                        </div>
                        <div class="col-sm-12">
                            <p class="descrip"><i class="fa fa-envelope-o"></i> {{$cuenta[0]->email}}</p>
                            <p><i class="fa fa-globe">  </i> {{$cuenta[0]->ciudad}} </p>
                            <p>    <i class="fa fa-group"> </i> {{$cuenta[0]->num_int}}</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <p class="descrip"><strong>Descripcion: </strong>{{$cuenta[0]->descripcion}}</p>
                        <strong>Categorias</strong>
                        <p>
                        @foreach($categorias as $categoria)
                            <span>{{$categoria->nombre}} - </span>
                        @endforeach
                        </p>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" id="latitud" value="{{$cuenta[0]->latitud}}">
                            <input type="hidden" id="longitud" value="{{$cuenta[0]->longitud}}">
                            <input type="hidden" id="titulo" value="{{$cuenta[0]->nombre}}">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        @if(count($actividades) > 0)
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info"><center><i class="fa fa-archive"></i> Publicaciones</center></div>
                </div>
            </div>
            @foreach($actividades as $actividad)

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <a href="/publications/{{$actividad->id}}" target="_blank"> <h4><i class="fa fa-flag"></i> {{$actividad->titulo}}</h4></a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="descrip"><i class="fa fa-calendar"> <strong>{{$actividad->fecha}}</strong></i> |
                                    <i class="fa fa-user"> <a href="/user/autor/{{$cuenta[0]->email}}">
                                            {{$cuenta[0]->nombre}}
                                        </a></i>
                                </p>
                                <p class="descrip"><strong>Descripcion: </strong>{{$actividad->descripcion}}</p>

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
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info"><center><i class="fa fa-exclamation-circle"></i> Aun No ha registrado actividades</center></div>
                </div>
            </div>

        @endif



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