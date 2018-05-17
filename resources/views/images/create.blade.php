@extends('layouts.app')
@section('content')
    <main role="main" class="main">

        <div class="container" style="background-color: white;">
            <painel titulo="Fotos">
                {!! Form::open(['url' => 'fotos', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <label for="images">Adicionar fotos</label>
                    {!! Form::file('images[]', ['class' => 'form-control', 'multiple']); !!}
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </painel>
        </div>

    </main>
@endsection