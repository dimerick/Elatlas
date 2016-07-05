<div class="form-group">
    <label>{{ trans('validation.attributes.name') }}*</label>
    {!! Form::text('nombre', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.email') }}*</label>
    {!! Form::email('email', '', ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.city') }}*</label>
    {!! Form::text('ciudad', null, ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label>Arrastra el icono para establecer tu ubicacion geografica*</label>
    <div id="map"></div>
</div>
<input type="hidden" id="latitud" name="latitud" value="">
<input type="hidden" id="longitud" name="longitud" value="">

<hr>
<div class="form-group">
<div class="row">

        <label id="cate">Marque las categorias a las que pertenece el grupo</label>
    </br></br>
    @foreach($categorias as $categoria)
            <div class="col-sm-6">

                {!! Form::checkbox($categoria->id, $categoria->id)!!}
                <label>{{ $categoria->nombre}}</label>

        </div>
    @endforeach
            </div>
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.num_int') }}*</label>
    {!! Form::number('num_int', '1', ['min' => '1', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.descript') }}*</label>
    {!! Form::textarea('descripcion', null, ['cols' => '70', 'rows' => '7', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.file') }}</label>
    {!! Form::file('foto', ['accept' => 'image/*', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.password') }}*</label>
    {!! Form::password('password', ['class'=> 'form-control']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.password_confirmation') }}*</label>
    {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
</div>


