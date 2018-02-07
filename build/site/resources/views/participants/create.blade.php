@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="container">

                    <div class="form_inscription">
    @if($total < 150)
    {!! Form::open(['route' => 'participants.store', 'method' => 'POST']) !!}
        @include('participants.form')
    {!! Form::close() !!}
    @else
        <h1>Vagas esgotadas!</h1>
    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection