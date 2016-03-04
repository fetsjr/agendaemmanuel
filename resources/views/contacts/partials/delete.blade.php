{{ Form::open(['route' => ['contacts.destroy', $contacts], 'method' => 'DELETE']) }}

	<button type="submit" class="btn btn-danger">Eliminar contacto</button>

{{ Form::close() }}