@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops! 404 Not Found</h1>
                <div class="error-details">
                    Recurso no encontrado
                </div>
                <br>
                <div class="error-actions">
                    <a href="http://agendaemmanuel.local/home" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-home"></span> Llevame a mi perfil</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection