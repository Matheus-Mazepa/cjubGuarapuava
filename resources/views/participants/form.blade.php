@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white; padding-top: 100px;">
@if (\Carbon\Carbon::now()->between(\Carbon\Carbon::create(2018,02,06), \Carbon\Carbon::create(2018,04,06)) && env('OPEN_REGISTRATIONS', false))
    @if($total <= 147)
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="panel-heading">
            <label style="font-size: 35px;">Instruções para pagamento</label>
            <p style="font-size: 30px;">
                <label>Valor da inscrição</label>
                @if(\Carbon\Carbon::now()->between(\Carbon\Carbon::create(2018,02,11), \Carbon\Carbon::create(2018,03,23)))
                    <label>R$ 130,00 (Até dia 23/03/2018)</label>
                @else
                    <label>R$ 160,00</label>
                @endIf
            </p>
            <p  style="font-size: 25px"><b>O pagamento deverá ser realizado via depósito bancário ou transferência e ter seu comprovante envidado para o e-mail
                <a href="#">contato@cjubguarapuava.com.br</a>
            </b>
            </p>
            <label style="font-size: 25px">Conta para depósito:</label>
            <table>
                <tr>
                    <td>Banco:</td>
                    <td>Banco do Brasil</td>
                </tr>
                <tr>
                    <td>Tipo de conta:</td>
                    <td>Poupança</td>
                </tr>
                <tr>
                    <td>Favorecido:</td>
                    <td>Tarcisio Lucavei</td>
                </tr>
                <tr>
                    <td>Agência:</td>
                    <td>0182-1</td>
                </tr>
                <tr>
                    <td>Conta:</td>
                    <td>46.418-X</td>
                </tr>
                <tr>
                    <td>Variação:</td>
                    <td>51</td>
                </tr>
            </table>
        </div>
        <painel titulo="Inscrições">
            {!! Form::open(['url' => 'inscreva-se']) !!}
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label for="name">Nome completo(*)</label>
                {!! Form::text('name', null,['class' => ' form-control']) !!}
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="cpf">CPF(*)</label>
                {!! Form::text('cpf', null, ['id'=>'cpf', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="phone">Telefone</label>
                {!! Form::text('phone', null, ['id' => 'phone','class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <label for="community">Comunidade(*)</label>
                {!! Form::text('community', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="community">Email(*)</label>
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-12 col-md-6 col-sm-12">
                <label for="phone">Endereço</label>
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <label for="size_t_shirt">Tamanho da camiseta(*)</label>
                <p>
                    <label>
                        {!! Form::radio('size_t_shirt', 'P'); !!}
                        P
                    </label>
                    <label>
                        {!! Form::radio('size_t_shirt', 'M'); !!}
                        M
                    </label>
                    <label>
                        {!! Form::radio('size_t_shirt', 'G'); !!}
                        G
                    </label>
                    <label>
                        {!! Form::radio('size_t_shirt', 'GG'); !!}
                        GG
                    </label>
                </p>
            </div>
            <div class="form-group col-lg-2 col-md-6 col-sm-12">
                <label for="babylook">Babylook?(*)</label>
                <p>
                    <label>
                        {!! Form::radio('babylook', '1'); !!}
                        Sim
                    </label>
                    <label>
                        {!! Form::radio('babylook', '0'); !!}
                        Não
                    </label>
                </p>
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="needs_transport">Dia da chegada(*)</label>
                <p>
                    <label>
                        {!! Form::radio('arrives_on_friday', '1'); !!}
                        Sexta
                    </label>
                    <label>
                        {!! Form::radio('arrives_on_friday', '0'); !!}
                        Sábado
                    </label>
                </p>
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="needs_transport">Data de nascimento</label>
                {!! Form::text('birth_date', null, ['id' => 'birth_date','class'=>'datepicker form-control']) !!}
            </div>
            <div class="form-group col-lg-12 col-md-6 col-sm-12">
                <label for="needs_transport">Precisará de transporte durante o evento dentro da cidade em Guarapuava/PR? (Translado entre rodoviária e local do evento)(*)</label>
                <p>
                    <label>
                        {!! Form::radio('needs_transport', '1'); !!}
                        Sim
                    </label>
                    <label>
                        {!! Form::radio('needs_transport', '0' ); !!}
                        Não
                    </label>
                </p>
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="has_special_needs">Nescessidades especiais</label>
                <p>
                    <label>
                        {!! Form::radio('has_special_needs', '1'); !!}
                        Sim
                    </label>
                    <label>
                        {!! Form::radio('has_special_needs', '0'); !!}
                        Não
                    </label>
                </p>
            </div>
            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                <label for="has_special_needs">Quais nescessidades</label>
                {!! Form::text('special_needs', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-4 col-md-6 col-sm-12">
                <label for="workshop">Oficina</label>
                {!! Form::select('workshop_id', $workshops, null, ['placeholder' => 'Selecione uma oficina', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-12 col-md-6 col-sm-12">
                <label for="observations">Observações</label>
                {!! Form::textarea('observations', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <p>
                    <p style="font-size: 20px;">* Para aqueles que forem chegar na sexta-feira o valor é de R$ 160,00</p>
                </p>
            </div>
            {!! Form::close() !!}
        </painel>

    @else
        <h2>Ficou sem se inscrever? :(</h2>
                <label>Ainda há uma chance!</label>
                <label>Entre em contato pelo e-mail <a href="#">contato@cjubguarapuava.com.br</a> que veremos o que podemos fazer para te ajudar!</label>
    @endif
@else
    <h2>As inscrições iniciarão dia 05 de Fevereiro de 2018</h2>
@endif
    </div>
@endSection