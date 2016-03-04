<div class="form-group">
   {{ Form::label('firstName', 'Nombre') }}
   {{ Form::text('firstName', null, ['class' => 'form-control','placeholder' => 'Introduce tu nombre']) }}
</div>
<div class="form-group">
   {{ Form::label('lastName', 'Apellido') }}
   {{ Form::text('lastName', null, ['class' => 'form-control','placeholder' => 'Introduce tus Apellidos']) }}
</div>
<div class="form-group">
   {{ Form::label('email', 'Correo electrónico') }}
   {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor, introduzca su email']) }}
</div>
<div class="form-group">
   {{ Form::label('phone', 'Teléfono') }}
   {{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Por favor, introduzca su teléfono']) }}
</div>
<div class="form-group">
   {{ Form::label('address', 'Dirección') }}
   {{ Form::text('address', null, ['class' => 'form-control','placeholder' => 'Introduce tu dirección']) }}
</div>
<div class="form-group">
   {{ Form::label('groups', 'Categoría') }}
   {{ Form::select('groups',['Familiar' => 'Familiar', 'Amigo' => 'Amigo', 'Conocido' => 'Conocido', 'Trabajo' => 'Trabajo', 'Compañero de estudios' => 'Compañero de estudios'], null, ['class' => 'form-control', 'placeholder' => 'Elige una categoría']) }}
</div>