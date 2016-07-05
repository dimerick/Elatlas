@extends('new/template')

@section('title')
    Solicitud de Activacion
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')
                    <div class="alert alert-danger">
                        <p><strong>Aun nos has activado la cuenta</strong></p>
                        Hemos enviado al email {{$email}} el codigo de activacion<br>Si tienes problemas para activar tu cuenta escribenos al email atlasdelafecto@gmail.com
                    </div>

@endsection