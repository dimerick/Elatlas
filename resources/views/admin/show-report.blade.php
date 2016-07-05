@extends('new/template')

@section('title')
    Reporte
    @endsection

@section('css')
    <link href="{{ asset('assets/css/lightbox.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


    @section('content')
<div class="row">

    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4><i class="fa fa-flag"></i> {{$reporte[0]->titulo}}</h4></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12" id="actions">
                        <p class="descrip">
                            @if($reporte[0]->confirmada == 1)
                                <a href="#" class="active" disabled="disabled"><i class="fa fa-thumbs-up fa-lg" title="Aprobar"></i></a>
                                <a href="/admin/reports/desapprove/{{$reporte[0]->id}}"> <i class="fa fa-thumbs-down fa-lg" title="Desaprobar"></i> </a>
                            @else
                                <a href="/admin/reports/approve/{{$reporte[0]->id}}"><i class="fa fa-thumbs-up fa-lg" title="Aprobar"></i></a>
                                <a href="#" class="active"> <i class="fa fa-thumbs-down fa-lg" title="Desaprobar"></i> </a>
                            @endif


                            <a href="/admin/reports/delete/{{$reporte[0]->id}}" id="remove"> <i class="fa fa-close fa-lg" title="Eliminar"></i> </a>
                            <a href="/admin/reports/edit/{{$reporte[0]->id}}"> <i class="fa fa-refresh fa-lg" title="Actualizar"></i> </a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="descrip"><i class="fa fa-calendar"> <strong>{{$reporte[0]->fecha}}</strong></i> |

                            <i class="fa fa-user"> <a href="/autor/{{$reporte[0]->email}}">
                                    {{$reporte[0]->nombre}}
                                </a></i>
                        </p>
                        <p class="descrip"><strong>Descripcion: </strong>{{$reporte[0]->descripcion}}</p>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">

                        @foreach($fotos as $foto)

                            <a href="/files/actividades/{{$foto->url}}" data-lightbox="{{$reporte[0]->titulo}}" data-title="{{$reporte[0]->titulo}}"><img src="/files/actividades/{{$foto->url}}" width="150px" class="pull-left thumbnail"></a>

                        @endforeach

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="hidden" id="latitud" value="{{$reporte[0]->latitud}}">
                        <input type="hidden" id="longitud" value="{{$reporte[0]->longitud}}">
                        <input type="hidden" id="titulo" value="{{$reporte[0]->titulo}}">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>
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