@extends('v2/template')

@section('title')
    Editar usuario
@endsection

@section('css')

@endsection

@section('content')

                    @include('partials.messages')
                    <div class="panel panel-default">
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
                                <label>Seleccione su ubicacion*</label>
                                <div id="register-map"></div>
                            </div>
                            <input type="hidden" id="latitud" name="latitud" value="{{$user['latitud']}}">
                            <input type="hidden" id="longitud" name="longitud" value="{{$user['longitud']}}">

                            <hr>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
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
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.num_int') }}*</label>
                                {!! Form::number('num_int', $user['num_int'], ['min' => '1', 'class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label>{{ trans('validation.attributes.descript') }}*</label>
                                {!! Form::textarea('descripcion', $descripcion, ['cols' => '70', 'rows' => '7', 'class' => 'form-control']) !!}
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
    <script>
        $('document').ready(function(){
            function inicializarMap(latitud, longitud){
                if(latitud != null && longitud != null){
                    $('#latitud').val(latitud);
                    $('#longitud').val(longitud);
                }else{
                    latitud = 6.25304;
                    longitud = -75.56457;
                }
                var myIcon = L.icon({
                    iconUrl: '/assets/v2/images/icon_retorno.png',
                    iconSize: [40, 40],
                    iconAnchor: [22, 10]
                });

                var map = L.map('register-map', {
                    center: [latitud, longitud],
                    zoom: 12
                });
                L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

                var punto = L.marker([latitud, longitud], {
                    icon: myIcon,
                    draggable: true
                }).addTo(map);

                punto.on('dragend', function(e) {
                    var latLng = punto.getLatLng();
                    var lat = latLng.lat;
                    var long = latLng.lng;
                    $('#latitud').val(lat);
                    $('#longitud').val(long);
                });
            }

            var latitud, longitud;
            latitud = $('#latitud').val();
            longitud = $('#longitud').val();

            inicializarMap(latitud, longitud);

            submitBtn.addEventListener("click", function(e){
                if($('#latitud').val() == "" && $('#longitud').val() == ""){
                    alert('Arrastra el icono en el mapa para establecer tu ubicacion');
                }
                var valido=true;
                var campos = $("[required]").each(function(index){
                    if($(this).val() == ""){
                        valido = false;

                    }

                });
                if(!valido){
                    e.preventDefault();
                    e.stopPropagation();
                    alert('Faltan campos por completar');
                }
            });

        });
    </script>

@endsection