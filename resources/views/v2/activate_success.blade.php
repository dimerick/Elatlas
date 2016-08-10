@extends('v2/template-auth')

@section('title')
    Activacion Exitosa
@endsection


@section('content')

                    <div class="alert alert-success">
                        <p>La cuenta ha sido activada exitosamente.</p>
                    </div>
                    <div class="alert">
                        <p>Ya puedes disfrutar de todos los beneficios de pertenecer a esta comunidad mundial.</p>
                        <br>
                        <p><a href="/auth/login" class="btn btn-primary" role="button">Iniciar Sesión</a></p>
                    </div>
@endsection