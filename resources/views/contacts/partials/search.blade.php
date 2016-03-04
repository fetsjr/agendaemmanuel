{{ Form::model($request->only(['name', 'groups']), ['route' =>'contacts.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) }}
    <div class="form-group">
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de contacto']) }}
        {{ Form::select('groups', config('options.groups'), null, ['class' => 'form-control']) }}

    </div>
    <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span> Buscar</button>
{{ Form::close() }}