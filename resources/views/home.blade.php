@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Página Personal</div>

                <div class="panel-body">
                   <h4>Información personal del usuario: {{Auth::user()->fullName}}</h4>
                    <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" value="{{Auth::user()->firstName}}" readonly>
                     <label for="apellidos">Apellidos:</label>
                    <input class="form-control" id="apellidos" name="apellidos" type="text" value="{{Auth::user()->lastName}}" readonly>
                    <label for="email">Email:</label>
                    <input class="form-control"  id="email" name="email" type="text" value="{{Auth::user()->email}}" readonly>
                    </div>
                <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
