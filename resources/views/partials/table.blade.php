<table class="table table-striped">
    <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Email</th>
        <th>Ciudad</th>
        <th>Latitud</th>
        <th>Longitud</th>
        <th>No Integrantes</th>
        <th>Acciones</th>
    </tr>

    @foreach($grupos as $grupo)

            <tr data-id="{{$grupo->email}}">
                <td>{{$grupo->nombre}}</td>
                <td>{{$grupo->tipo}}</td>
                <td>{{$grupo->email}}</td>
                <td>{{$grupo->ciudad}}</td>
                <td>{{$grupo->latitud}}</td>
                <td>{{$grupo->longitud}}</td>
                <td>{{$grupo->num_integrantes}}</td>
                <td><a href="{{route('admin.grupos.edit', $grupo->email)}}">Editar</a> <a href="" class="btn-delete">Eliminar</a></td>
        </tr>

    @endforeach
</table>