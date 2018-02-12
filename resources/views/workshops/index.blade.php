@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white;">
    <div class="panel">
        <div class="form_inscription">
            <h1>Oficinas</h1>
            <div id="no-more-tables">
            <table class="table col-md-12 table-bordered table-striped table-condensed cf">
                <thead class="cf">
                <tr>
                <td>Nome</td>
                <td>Ministrante</td>
                <td>Quantidade de participantes</td>
                <td>Vagas disponíveis</td>
            </tr>
                </thead>
            @foreach($workshops as $workshop)
                <tr>
                    <td data-title="Nome">{{$workshop->name}}</td>
                    <td data-title="Palestrante">{{$workshop->minister}}</td>
                    <td data-title="Quantidade de participantes">{{$workshop->participants()->count()}}</td>
                    <td data-title="Vagas disponiveis">{{$workshop->available_vacancies}}</td>
                </tr>
            @endforeach
        </table>
            </div>
            </div>
    </div>
    </div>

@endsection