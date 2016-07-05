@extends('v2/template')

@section('title')
    Confirmacion Registro
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')
                    @include('partials.messages')
                    <div class="alert alert-info">
                        <p>Para terminar el proceso de registro hemos enviado un link de confirmacion al correo {{$email}}</p>
                    </div>

@endsection