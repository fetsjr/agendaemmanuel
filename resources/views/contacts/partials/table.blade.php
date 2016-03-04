<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Categoría</th>
        <th>Acciones</th>
    </tr>
    @foreach($contacts as $contact)
    <tr>
        <th>{{ $contact->id}}</th>
        <th>{{ $contact->fullName }}</th>
        <th>{{ $contact->email }}</th>
        <th>{{ $contact->groups }}</th>
        <th><a href="{{ route('contacts.edit', $contact) }}">Modificar</a> </th>
    </tr>
    @endforeach
</table>