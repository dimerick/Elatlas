@if(isset($user))
    <ul class="nav navbar-nav navbar-right pull-left">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" id="button-user-top" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <div id="cont-img-profile-top">
                @if($user['foto_peq'] != "")
                        <img src="/files/fotos_perfil/{{$user['foto_peq']}}" alt="">
                            @else
                        <img src="/assets/v2/images/photo-profile.jpg" alt="">
                            @endif
                </div>
                        <b> {{$user['nombre']}} </b>
                {{--<span class="caret"></span>--}}
            </a>
            <ul class="dropdown-menu">
                {{--<li><a href="/autor/{{$user['email']}}">Ver mi perfil</a></li>--}}
                <li><a href="/user/edit-photo-profile">Cambiar foto perfil</a></li>
                <li><a href="{{route('grupos.edit')}}">Actualizar Datos</a></li>
                <li><a href="/auth/logout">Cerrar Sesion</a></li>
            </ul>
        </li>
    </ul>
@endif



