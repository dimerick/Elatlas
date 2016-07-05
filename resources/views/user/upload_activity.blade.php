@extends('new/template')

@section('title')
    Cargar Actividad
@endsection

@section('css')
    <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

    <div class="panel panel-primary">

        <div class="panel-heading"> <h4>Registro Actividad</h4></div>
        <div class="panel-body">
            {!! Form::open(['url'=> '/user/upload-activity', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}

            <div class="form-group">
                <label for="titulo">Titulo Actividad *</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Indique un titulo para la actividad" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha *</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion *</label>
                <textarea required cols="75" rows="7" id="descripcion" name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Ubicacion *</label>
                <input type="hidden" id="latitud" name="latitud" required>
                <input type="hidden" id="longitud" name="longitud" required>
                <div id="map"></div>
            </div>


            <div class="form-group">
            <div class="dz-message" id="dz-message">
                <p>Haga click o arrastre las fotos a esta area</p>
                {{--</br>--}}
                {{--Maximo 4 fotos--}}
            </div>
            </div>
            <div class="form-group"><div class="dropzone-previews"></div></div>


            <div class="form-group"><button type="submit" class="btn btn-primary" id="submit">Enviar</button></div>

            {!! Form::close() !!}



        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
    <script src="{{ asset('assets/js/registrarActividad.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFilesize: 10,
            maxFiles: 100,
            acceptedFiles: 'image/*',

            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    var valido=true;
                    var campos = $("[required]").each(function(index){
                        if($(this).val() == ""){
                            if(this.name != "inputSearch"){
                                valido = false;
                            }

                        }

                    });
                    if(valido){

                        var state = $("#load-fotos").prop("checked");
                        if(!state){
                            e.preventDefault();
                            e.stopPropagation();
                            myDropzone.processQueue();
                        }
                    }else{
                        e.preventDefault();
                        e.stopPropagation();
                        alert('Faltan campos por completar');
                    }


                });
                this.on("addedfile", function(file) {

                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
                this.on("successmultiple", function(files, response){
                    alert('Se ha registrado la actividad exitosamente');
                    location.reload();

                });
                this.on("errormultiple", function(files, response){
                alert("hubo un error al enviar los archivos");
                    location.reload();
                });
//                this.on("success",
//                        myDropzone.processQueue.bind(myDropzone)
//                );
            }
        };
    </script>
@endsection