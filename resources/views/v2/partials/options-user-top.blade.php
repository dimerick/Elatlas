@if($user != null)
    <ul class="nav navbar-nav navbar-right pull-left">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>{{$user['nombre']}} </b><span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/autor/{{$user['email']}}">Ver mi perfil</a></li>
                <li><a href="{{route('grupos.edit')}}">Editar mi perfil</a></li>
                <li><a href="/auth/logout">Cerrar Sesion</a></li>
            </ul>
        </li>
    </ul>
@endif



