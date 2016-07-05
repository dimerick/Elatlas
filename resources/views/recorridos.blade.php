@extends('new/template')

@section('title')
    Recorridos
@endsection

@section('css')
@endsection

@section('options-user')
    @include('partials/options-user')
@endsection


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="row">

            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="/files/recorridos/Recorrido1DerechoALaCiudad_14 de noviembre_1.jpg">
                    <div class="caption">
                        <h3>Derecho a la Ciudad</h3>
                        </br>
                        <p><a href="/recorridos/derecho-a-la-ciudad/page1" class="btn btn-primary" role="button">Ver mas</a> </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection