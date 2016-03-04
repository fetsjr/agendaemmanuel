@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contactos</div>

                <div class="panel-body">
                    @include('contacts.partials.messages-correct')
                    @include('contacts.partials.search')
                    <p><a class="btn btn-info" href="{{route('contacts.create')}}" role="button">Crear contacto</a></p>
                    {{-- Buscar como mostrar la página en la que me encuentro --}}
                    <p>Hay {{$contacts->lastPage()}} páginas</p>
                    <p>Hay {{$contacts->total()}} contactos</p>
                    <p>La página actual es: {{$contacts->currentPage()}}</p>
                    @include('contacts.partials.table')
                    {{$contacts->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
