@extends('new/template')

@section('title')
    Añadir fotos a {{$datos['titulo']}}
@endsection

@section('css')
    <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

    <div class="panel panel-primary">

        <div class="panel-heading"> <h4>Añadir fotos a {{$datos['titulo']}}</h4></div>
        <div class="panel-body">
            {!! Form::open(['url'=> '/user/upload-photos', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}

            <input type="hidden" name="id" value="{{$datos['id']}}">
            <div class="form-group">
            <div class="dz-message" id="dz-message">
                <p>Haga click o arrastre las fotos a esta area</p>

            </div>
            </div>
            <div class="form-group"><div class="dropzone-previews"></div></div>


            <div class="form-group"><button type="submit" class="btn btn-primary" id="submit">Enviar</button></div>

            {!! Form::close() !!}



        </div>
    </div>
@endsection

@section('scripts')
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
                            e.preventDefault();
                            e.stopPropagation();
                            myDropzone.processQueue();

                });
                this.on("addedfile", function(file) {

                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
                this.on("successmultiple", function(files, response){
                    alert('Se han añadido las fotos exitosamente');
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