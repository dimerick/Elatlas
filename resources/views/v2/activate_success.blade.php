@extends('v2/template')

@section('title')
    Activacion Exitosa
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

                    <div class="alert alert-success">
                        <p>La cuenta ha sido activada exitosamente, ya puedes disfrutar de todos los beneficios de pertenecer a esta comunidad mundial</p>

                        <p><a href="/auth/login" class="btn btn-primary" role="button">Iniciar Sesion</a></p>
                    </div>
@endsection