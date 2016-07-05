@extends('v2/template')

@section('title')
    Atlas del afecto
@endsection


@section('options-user')
    @include('partials/options-user')
@endsection


@section('pagina')
    Perfil {{$cuenta[0]->nombre}}
@endsection

@section('content')
        <div class="panel panel-default">
                <div class="panel-heading"> <h4><i class="fa fa-user"> </i> {{strtoupper($cuenta[0]->nombre)}}</h4></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/files/{{$cuenta[0]->foto}}" data-lightbox="{{$cuenta[0]->nombre}}" data-title="{{$cuenta[0]->nombre}}"><img src="/files/{{$cuenta[0]->foto}}" width="40%" class="thumbnail photo-profile"></a>

                        </div>
                        <div class="col-sm-12">
                            <div id="categories-group">
                                <ul>
                                    @foreach($categorias as $categoria)
                                        <li><i class="fa fa-tag"></i> {{$categoria->nombre}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <ul id="data-group">
                                <li><i class="fa fa-group"> </i> <span id="num-int-group">{{$cuenta[0]->num_int}}</span></li>
                                <li><i class="fa fa-globe"> </i><span id="city-group"> {{$cuenta[0]->ciudad}}</span></li>
                                <li><i class="fa fa-envelope-o"> </i><span id="email-group"> {{$cuenta[0]->email}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12">

<hr>
                        <div id="description-group">
                            <p>{!!$descripcion!!}</p>
                        </div>

                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-sm-12">
                            <input type="hidden" id="latitud" value="{{$cuenta[0]->latitud}}">
                            <input type="hidden" id="longitud" value="{{$cuenta[0]->longitud}}">
                            <input type="hidden" id="titulo" value="{{$cuenta[0]->nombre}}">
                            <div id="autor-map"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>

        @if(count($actividades) > 0)
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert alert-info"><i class="fa fa-archive"></i> Publicaciones</div>
                </div>
            </div>
            @foreach($actividades as $actividad)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/publications/{{$actividad->id}}" target="_blank"> <h4><i class="fa fa-flag"></i> {{strtoupper($actividad->titulo)}}</h4></a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <p class="descrip"><i class="fa fa-calendar"> <strong>{{$actividad->fecha}}</strong></i> |
                                    <i class="fa fa-user"> <a href="/user/autor/{{$cuenta[0]->email}}">
                                            <b>{{$cuenta[0]->nombre}}</b>
                                        </a></i>
                                </p>
<hr>
                                <p class="descrip">{{$actividad->descripcion}}</p>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">

                                @foreach($fotos as $foto)
                                    @if($foto->actividad == $actividad->id)
                                        <a href="/files/actividades/{{$foto->url}}" data-lightbox="{{$actividad->titulo}}" data-title="{{$actividad->titulo}}"><img src="/files/actividades/{{$foto->url}}" width="20%" class="pull-left thumbnail"></a>
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
    <script>
        $('document').ready(function(){
            var latitud, longitud, titulo;
            latitud = $('#latitud').attr("value");
            longitud = $('#longitud').attr("value");
            titulo = $("#titulo").attr("value");


            var myIcon = L.icon({
                iconUrl: '/assets/v2/images/icon_retorno.png',
                iconSize: [40, 40],
                iconAnchor: [22, 10]
            });

            var map = L.map('autor-map', {
                center: [latitud, longitud],
                zoom: 12
            });
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

            var punto1 = L.marker([latitud, longitud], {icon: myIcon}).addTo(map);

        });


    </script>
@endsection