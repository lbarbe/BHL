@extends('layouts.master')



@section('content')
    <div id="container">
        <div id="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ajouter un avatar</div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    
                        {!! Form::open(array('route' => 'avatars.store', 'files' => true, 'method' => 'post')) !!}
                            {!! Form::label('mail', 'Votre adresse mail') !!}
                            {!! Form::email('mail', '', ['class' => 'form-control']) !!}<br />
                            {!! Form::label('image', 'Votre avatar') !!}
                            {!! Form::file('image', ['class' => 'form-control-file']) !!}
                            {!! Form::submit('Envoyer !', ['id' => 'send', 'class' => 'btn btn-primary mb-2']) !!}<br/><br />
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection