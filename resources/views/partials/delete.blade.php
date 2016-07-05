{!! Form::open(['route' => ['admin.grupos.destroy', $grupo], 'method' => 'DELETE']) !!}
<button type="submit" onclick="return confirm('Seguro desea eliminar este grupo?')" class="btn btn-danger">Eliminar Grupo</button>
{!! Form::close() !!}