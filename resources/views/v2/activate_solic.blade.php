@extends('v2/template')

@section('title')
    Solicitud de Activacion
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')
                    <div class="alert alert-danger">
                        <p><strong>Aun nos has activado la cuenta</strong></p>

                        <p>Hemos enviado al email <b>{{$email}}</b> el codigo de activacion</p>
                        <p>Si tienes problemas para activar tu cuenta escribenos al email info@elatlas.org</p>
                    </div>

@endsection