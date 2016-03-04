@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Contacto: {{ $contacts->fullname }}</div>

                <div class="panel-body">

                    @include('contacts.partials.messages')

                    {{ Form::model($contacts, ['route' => ['contacts.update', $contacts->id], 'method' => 'PUT']) }}
                        @include('contacts.partials.fields')
                        <button type="submit" class="btn btn btn-primary">
                            Editar
                        </button>
                    {{ Form::close() }}
                    <br>
                        @include('contacts.partials.delete')
                </div>
            </div>

        </div>
    </div>
</div>
@endsection