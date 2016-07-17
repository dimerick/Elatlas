<div class="form-group">
    <label>{{ trans('validation.attributes.name') }}*</label>
    {!! Form::text('nombre', null, ['class'=> 'form-control', 'required' => 'required', 'id' => 'nombre']) !!}
</div>

<div class="form-group">
    <label>Nombre representante*</label>
    {!! Form::text('nom_repre', null, ['class'=> 'form-control', 'required' => 'required', 'id' => 'nom-repre']) !!}
</div>

<div class="form-group">
    <label>Telefono*</label>
    {!! Form::text('telefono', null, ['class'=> 'form-control', 'required' => 'required', 'id' => 'telefono']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.email') }}*</label>
    {!! Form::email('email', '', ['class'=> 'form-control', 'required' => 'required', 'id' => 'email']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.city') }}*</label>
    {!! Form::text('ciudad', null, ['class'=> 'form-control', 'required' => 'required', 'id' => 'ciudad']) !!}
</div>

<div class="form-group">
    <label>Arrastra el icono para establecer tu ubicacion geografica*</label>
    <div id="register-map"></div>
</div>
<input type="hidden" id="latitud" name="latitud" value="" required="required">
<input type="hidden" id="longitud" name="longitud" value="" required="required">

<hr>
<div class="form-group">
    <div class="row">
        <div class="col-sm-12">
            <label id="cate">Seleccione la categoria principal del grupo*</label>
            <select class="form-control" name="cat_prin" id="cat-prin"required>
                <option value=""></option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{ $categoria->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-group" id="form-cat-sec">
<div class="row">
<div class="col-sm-12">
    <label id="cate">Marque las categorias secundarias con las que se identifica el grupo</label>
    <div id="cont-cat-sec">
        <ul>
    @foreach($categorias as $categoria)

           <li id = "cat-sec-{{$categoria->id}}"> {!! Form::checkbox($categoria->id, $categoria->id, false, ['class' => 'check-category'])!!}
            {{ $categoria->nombre}}</li>
        @endforeach
        </ul>
    </div>
</div>

            </div>
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.num_int') }}*</label>
    {!! Form::number('num_int', '1', ['min' => '1', 'class' => 'form-control', 'required' => 'required', 'id' => 'num_int']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.descript') }}*</label>
    {!! Form::textarea('descripcion', null, ['rows' => '7', 'class' => 'form-control', 'required' => 'required', 'id' => 'descripcion']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.file') }}*</label>
    {!! Form::file('foto', ['accept' => 'image/*', 'class' => 'form-control', 'required' => 'required', 'id' => 'foto']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.password') }}*</label>
    {!! Form::password('password', ['class'=> 'form-control', 'required' => 'required', 'id' => 'password']) !!}
</div>

<div class="form-group">
    <label>{{ trans('validation.attributes.password_confirmation') }}*</label>
    {!! Form::password('password_confirmation', ['class'=> 'form-control', 'required' => 'required', 'id' => 'password_conf']) !!}
</div>


