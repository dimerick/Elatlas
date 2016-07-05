@extends('app')

@section('content')
Registro Grupo
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('form.signup.title') }}</div>

                    <div class="panel-body">
                        {!! Form::open(['route' => 'auth/register', 'class' => 'form', 'files' => 'true', 'method' => 'POST', 'accept-charset' => 'ISO-8859-1']) !!}

                        <div class="form-group">
                            <label>{{ trans('form.label.name') }}</label>
                            {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Tipo</label>
                            {!! Form::select('tipo', array('null' => '', 'colectivo' => 'Colectivo', 'grupo' => 'Grupo', 'organizacion' => 'Organizacion'), 'null', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ trans('form.label.email') }}</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.city') }}</label>
                            {!! Form::text('ciudad', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.lat') }}</label>
                            {!! Form::text('latitud', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.long') }}</label>
                            {!! Form::text('longitud', null, ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.num_int') }}</label>
                            {!! Form::number('num_integrantes', '1', ['min' => '1', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.descript') }}</label>
                            {!! Form::textarea('descripcion', null, ['cols' => '70', 'rows' => '7', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.file') }}</label>
                            {!! Form::file('foto', ['accept' => 'image/*', 'class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.password') }}</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>{{ trans('form.label.password_confirmation') }}</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::submit(trans('form.signup.submit'),['class' => 'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection