@extends('new/template')

@section('title')
    Registro
@endsection

@section('css')

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

                    {!! Form::open(array('route' => 'grupos.store', 'files' => true)) !!}
                            @include('partials.fields')
                            <div class="form-group">
                                <span>Al hacer clic en "Registrarte" Aceptas los <a href="/terms-conditions" target="_blank">Terminos y Condiciones del servicio</a></span>
                            </div>
                    {!! Form::submit(trans('validation.attributes.submit'),['class' => 'btn btn-primary']) !!}
                    </div>

                    {!! Form::close() !!}

                        </div>


@endsection
@section('scripts')
       <script src="{{ asset('assets/js/registerUser.js') }}"></script>

@endsection