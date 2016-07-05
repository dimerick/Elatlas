@extends('new/template')

@section('title')
    Editar usuario
@endsection

@section('css')

@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

                    @include('partials.messages')
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4>Formulario de Edicion</h4>
                        <br>
                            Requerido*
                        </div>

                        <div class="panel-body">

                    {!! Form::open(array('route' => 'grupos.update', 'files' => true, 'method' => 'PUT')) !!}
                            <div class="form-group">
                                <label>{{ trans('validation.attributes.name') }}*</label>
                                {!! Form::text('nombre', $user['nombre'], ['class'=> 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.email') }}*</label>
                                {!! Form::email('email', $user['email'], ['class'=> 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.city') }}*</label>
                                {!! Form::text('ciudad', $user['ciudad'], ['class'=> 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>Seleccione su ubicacion</label>
                                <div id="map"></div>
                            </div>
                            <input type="hidden" id="latitud" name="latitud" value="{{$user['latitud']}}">
                            <input type="hidden" id="longitud" name="longitud" value="{{$user['longitud']}}">

                            <hr>
                            <div class="form-group">
                                <div class="row">

                                    <label id="cate">Marque las categorias a las que pertenece el grupo</label>
                                    </br></br>
                                    @foreach($items as $item)
                                        <div class="col-sm-6">
                                                {!! Form::checkbox($item["id"], $item["id"], $item["checked"])!!}
                                                <label>{{ $item["nombre"]}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.num_int') }}*</label>
                                {!! Form::number('num_int', $user['num_int'], ['min' => '1', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.descript') }}*</label>
                                {!! Form::textarea('descripcion', $user['descripcion'], ['cols' => '70', 'rows' => '7', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.file') }}</label>
                                {!! Form::file('foto', ['accept' => 'image/*', 'class' => 'form-control']) !!}
                                <input type="checkbox" name="fotoAct"> Conservar foto actual
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.password') }}*</label>
                                {!! Form::password('password', ['class'=> 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.password_confirmation') }}*</label>
                                {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                            </div>

                            <div>
                    {!! Form::submit(trans('Actualizar'),['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

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