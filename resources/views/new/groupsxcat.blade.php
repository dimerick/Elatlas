@extends('new/template')

@section('title')
    Grupos x categoria
@endsection

@section('css')

@endsection

@section('options-user')
    @include('partials/options-user')

@endsection

@section('content')
    {{--<div class="panel panel-default">--}}
        {{--<div class="panel-body">--}}
            {{--<div class="well well-sm well-cat"><h3>No violencia</h3></div>--}}
                {{--<div class="col-sm-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="/files/fotos_perfil/2016-06-04_18-14-02_EricDim.jpg" alt="">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Corporación Casa Mia</h3>--}}
                            {{--<p>La Corporación Casa Mía es una iniciativa comunitaria creada por un grupo de jóvenes...</p>--}}
                            {{--<p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}

    {{--<hr>--}}

<div class="row">
    <div class="panel panel-default">
    <div class="panel-body">
    <div class="col-sm-4">
        <img width="100%" src="/files/fotos_perfil/2016-06-04_18-14-02_EricDim.jpg" alt="">
    </div>
    <div class="col-sm-8">
        <h3>Corporación Casa Mia</h3>
        <p>La Corporación Casa Mía es una iniciativa comunitaria creada por un grupo de jóvenes...</p>
        <p><a href="#" class="btn btn-primary" role="button">Ver mas</a></p>
    </div>
</div>
    </div>
</div>




@endsection

@section('scripts')

@endsection