@if($user == null)
        <!--Invitado-->
<span class="pull-right">
<a href="/auth/login" class="btn btn-danger btn-sm options-user" role="button"><span><i class="fa fa-sign-in"></i> Iniciar Sesion</span></a>
<a href="/grupos/create" class="btn btn-danger btn-sm options-user" role="button"><span class="fa fa-globe" aria-hidden="true"> Registrarse</span></a>
</span>
@elseif($user['tipo'] == 'user')
        <!--User-->
<ul class="nav navbar-nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{$user['nombre']}}<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/user/upload-activity">Cargar Actividad</a></li>
            <li><a href="/publications">Post Recientes</a></li>
            <li><a href="/autor/{{$user['email']}}">Ver mi perfil</a></li>
            <li><a href="/user/my-publications">Mis publicaciones</a></li>
            <li><a href="{{route('grupos.edit')}}">Editar mi perfil</a></li>
            <li><a href="/auth/logout">Salir</a></li>
        </ul>
    </li>
</ul>
<!--User-->
@elseif($user['tipo'] == 'admin')
        <!--Admin-->
<ul class="nav navbar-nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret"></i> {{$user['nombre']}}<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="/user/upload-activity">Cargar Actividad</a></li>
            <li><a href="/publications">Post Recientes</a></li>
            <li><a href="/autor/{{$user['email']}}">Ver mi perfil</a></li>
            <li><a href="/user/my-publications">Mis publicaciones</a></li>
            <li><a href="{{route('grupos.edit')}}">Editar mi perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin/reports">Ver reportes</a></li>
            <li><a href="/auth/logout">Salir</a></li>
        </ul>
    </li>
</ul>
<!--Admin-->
@endif



