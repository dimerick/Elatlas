<ul id="top-buttons">
    <li id="form-top">
        {!! Form::open(['url'=> '/user/search-group', 'method' => 'POST', 'class' => 'navbar-form navbar-right']) !!}
               <div class="input-group input-group-sm">
                <input type="text" class="form-control" placeholder="Buscar grupos" name="nombre" id="nombre">
                <div class="input-group-btn">
                    <button class="btn" type="submit" id="search"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        {!! Form::close() !!}
    </li>
    <li>
        <a href="/user/publications" role="button" data-toggle="modal"><i class="fa fa-tasks"></i> Post Recientes</a>
    </li>
    <li>
        <a href="/user/upload-activity" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Cargar Actividad</a>
    </li>
    <li class="divider"></li>
    <li>
        <div class="language-switcher">
            <span><i class="fa fa-user"></i> {{$user['nombre']}}</span>
            <ul>
                <li><a href="/user/autor/{{$user['email']}}">Ver mi perfil</a></li>
                <li><a href="/user/my-publications">Mis publicaciones</a></li>
                <li><a href="{{route('grupos.edit')}}">Editar mi perfil</a></li>
                <li><a href="/auth/logout">Salir</a></li>

            </ul>
        </div>
    </li>
    @if($user['tipo'] == 'admin')
        <li>
            <div class="language-switcher">
                <span><i class="fa fa-user-secret"></i> Admin</span>
                <ul>
                    <li><a href="/admin/reports">Ver reportes</a></li>

                </ul>
            </div>
        </li>

    @endif

</ul>