@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                @include('contacts.partials.messages')
                {{-- El action se llama 'route' --}}
                    {{Form::open(['route' => 'contacts.store', 'method' => 'POST'])}}
                        @include('contacts.partials.fields')
                            <p><br><button type="submit" class="btn btn btn-primary">Enviar</button></p>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
