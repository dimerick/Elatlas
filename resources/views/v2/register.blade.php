@extends('v2/template')

@section('title')
    Registro
@endsection

@section('css')
    <link href="{{ asset('assets/v2/css/Control.FullScreen.css') }}" rel="stylesheet">
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection

@section('content')

                    @include('partials.messages')
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Formulario de Registro</h3>
                        <br>
                            Requerido*
                        </div>

                        <div class="panel-body">

                    {!! Form::open(array('route' => 'grupos.store', 'files' => true, 'id' => 'form-register')) !!}
                            @include('v2/partials/fields')
                            <div class="form-group">
                                <span>Al hacer clic en "Registrarte" Aceptas los <a href="/terms-conditions" target="_blank">Terminos y Condiciones del servicio</a></span>
                            </div>
                    {!! Form::submit(trans('validation.attributes.submit'),['class' => 'btn btn-primary btn-block', 'id' => 'submit']) !!}
                    </div>

                    {!! Form::close() !!}

                        </div>


@endsection
@section('scripts')
       <script src="{{ asset('assets/v2/js/registerUser.js') }}"></script>
       <script src="{{ asset('assets/v2/js/Control.FullScreen.js') }}"></script>
@endsection