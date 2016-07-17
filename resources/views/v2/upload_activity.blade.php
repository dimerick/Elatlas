@extends('v2/template')

@section('title')
    Cargar Actividad
@endsection

@section('css')
    <link href="{{ asset('assets/v2/css/Control.FullScreen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')
    <div id="error"></div>

    <div class="panel panel-default">

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
                <div class="row">
                    <div class="col-sm-12">
                        <label>Categoria*</label>
                        <select class="form-control" name="categoria" id="categoria" required>
                            <option value=""></option>
                            @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{ $categoria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion *</label>
                <textarea required cols="75" rows="7" id="descripcion" name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Arrastre el icono hasta su ubicacion *</label>
                <input type="hidden" id="latitud" name="latitud" value="" required>
                <input type="hidden" id="longitud" name="longitud" value="" required>
                <div id="register-map"></div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" id="check-load-fotos" name="check-load-fotos"> Cargar fotos mas adelante
                </label>
            </div>

            <div class="form-group">
            <div class="dz-message" id="dz-message">
                <p>Haga click o arrastre las fotos a esta area</p>

            </div>
            </div>
            <div class="form-group"><div class="dropzone-previews"></div></div>


            <div class="form-group"><button type="submit" class="btn btn-primary btn-block" id="submit">Enviar</button></div>

            {!! Form::close() !!}



        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/v2/js/Control.FullScreen.js') }}"></script>
    <script src="{{ asset('assets/v2/js/registrarActividad.js') }}"></script>
    <script src="{{ asset('assets/v2/js/dropzone.js') }}"></script>
    <script>
        $("#check-load-fotos").click(function () {
            var state = $("#check-load-fotos").prop("checked");
            if(state){
                $(".dropzone-previews").css('display', 'none');
                $(".dz-message").css('display', 'none');
            }else{
                $(".dropzone-previews").css('display', 'block');
                $(".dz-message").css('display', 'block');
            }

        });
    </script>
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
                    if($('#latitud').val() == "" && $('#longitud').val() == ""){
                        alert('Arrastra el icono en el mapa para establecer tu ubicacion');
                    }
                    var valido=true;
                    var campos = $("[required]").each(function(index){
                        if($(this).val() == ""){
                            if(this.name != "inputSearch"){
                                valido = false;
                            }
                        }

                    });
                    if(valido){
                        var state = $("#check-load-fotos").prop("checked");
                        if(!state){
                            var numImages = 0;
                            $(".dz-preview").each(function(index){
                            numImages++;
                            });
                            e.preventDefault();
                            e.stopPropagation();
                            if(numImages>0){
                                myDropzone.processQueue();
                            }else{
                                alert("Debes cargar minimo una foto")
                            }
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
                    window.location.href = '/user/my-publications';

                });
                this.on("errormultiple", function(files, response){
                    console.log("Mostrando error");
                    $("#error").html(response);
                    console.log(response);
                alert("hubo un error al enviar los archivos");
//                    window.location.href = '/user/my-publications';
                });
//                this.on("success",
//                        myDropzone.processQueue.bind(myDropzone)
//                );
            }
        };
    </script>
@endsection