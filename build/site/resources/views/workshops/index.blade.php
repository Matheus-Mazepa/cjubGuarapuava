@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="panel panel-default">
        <div class="form_inscription">
            <h1>Oficinas</h1>
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Ministrante</td>
                <td>Quantidade de participantes</td>
                <td>Vagas disponíveis</td>
            </tr>
            @foreach($workshops as $workshop)
                <tr>
                    <td>{{$workshop->name}}</td>
                    <td>{{$workshop->minister}}</td>
                    <td>{{$workshop->participants()->count()}}</td>
                    <td>{{$workshop->available_vacancies}}</td>
                </tr>
            @endforeach
        </table>
            </div>
    </div>
    </div>

@endsection