@extends('v2/template')

@section('title')
    Activacion Cuenta
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
                    <div class="alert alert-danger">
                        <p>Error al activar la cuenta</p>
                        Posiblemente la cuenta ya ha sido activada.<br>Si tienes problemas para activar tu cuenta escribenos al email info@elatlas.org
                    </div>


@endsection