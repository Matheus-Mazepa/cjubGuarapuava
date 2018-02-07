@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="form_inscription">
                <h1>Inscrições</h1>
        <table class="table">
            <tr>
                <td>Nome</td>
                <td>Comunidade</td>
                <td>Oficina</td>
                <td>Status de pagamento</td>
                <td>Pagar</td>
                <td>Detalhes</td>
            </tr>
            @foreach($participants as $participant)
                <tr>
                    <td>{{$participant->name}}</td>
                    <td>{{$participant->community}}</td>
                    <td>{{$participant->workshop->name}}</td>
                    @if($participant->paid_out == true)
                        <td>Pago</td>
                        <td><button>Pagamento Confirmado</button></td>
                    @else
                        <td>Não pago</td>
                        <td><button onclick="javascript:confirmPayment(this)" data-id="{{$participant->id}}">Confirmar pagamento</button></td>
                    @endif
                    <td><modal-link
                                    tipo="link"
                                    name="detalhe"
                                    titulo="Detalhe"
                                    css=""
                                    :participant="{{ $participant }}"
                        ></modal-link></td>
                </tr>
            @endforeach
        </table>
                <modal name="detalhe">
                    <painel titulo="Informações sobre o participante">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" v-model="$store.state.participant.name" name="name" placeholder="Nome" disabled="true">
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" v-model="$store.state.participant.cpf" name="cpf" placeholder="Cpf" disabled="true">
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <label for="phone">Telefone</label>
                            <input type="text" class="form-control" id="phone" v-model="$store.state.participant.phone" name="phone" placeholder="Telefone" disabled="true">
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <label for="community">Comunidade</label>
                            <input type="text" class="form-control" id="community" v-model="$store.state.participant.community" name="community" placeholder="Comunidade" disabled="true">
                        </div>
                        <div class="form-group col-lg-12">
                                <label for="phone">Endereço</label>
                                <input type="text" class="form-control" id="address" v-model="$store.state.participant.address" name="address" placeholder="Endereço" disabled="true">
                        </div>
                        <div class="form-group col-lg-1 col-md-6 col-sm-12">
                            <label for="size_t_shirt">Camiseta</label>
                            <input type="text" class="form-control" id="size_t_shirt" v-model="$store.state.participant.size_t_shirt" name="size_t_shirt" placeholder="Camiseta" disabled="true">
                        </div>
                        <div class="form-group col-lg-2 col-md-6 col-sm-12">
                            <label for="babylook">Babylook?</label>
                            <input v-if="$store.state.participant.babylook" type="text" class="form-control" name="babylook" value="Sim" disabled="true">
                            <input v-if="!$store.state.participant.babylook" type="text" class="form-control" name="babylook" value="Não" disabled="true">
                        </div>
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            <label for="arrives_on_friday">Dia da chegada</label>
                            <input v-if="$store.state.participant.arrives_on_friday" type="text" class="form-control" name="arrives_on_friday" value="Sexta" disabled="true">
                            <input v-if="!$store.state.participant.arrives_on_friday" type="text" class="form-control" name="arrives_on_friday" value="Sabado" disabled="true">
                        </div>
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            <label for="needs_transport">Precisa de transporte no dia</label>
                            <input v-if="$store.state.participant.needs_transport" type="text" class="form-control" name="needs_transport" value="Sim" disabled="true">
                            <input v-if="!$store.state.participant.needs_transport" type="text" class="form-control" name="needs_transport" value="Não" disabled="true">
                        </div>
                        <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            <label for="has_special_needs">Nescessidades especiais</label>
                            <input v-if="$store.state.participant.has_special_needs" type="text" class="form-control" id="has_special_needs" v-model="$store.state.participant.special_needs" name="has_special_needs" placeholder="Nescessidades especiais" disabled="true">
                            <input v-if="!$store.state.participant.has_special_needs" type="text" class="form-control" id="has_special_needs" value="Não" name="has_special_needs" value="Não" disabled="true">
                        </div>
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <label for="workshop">Oficina</label>
                            <input type="text" class="form-control" id="workshop" v-model="participant.workshop.name" name="workshop" placeholder="Oficina" disabled="true">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="observations">Observações</label>
                            <textarea type="text" class="form-control" id="observations" v-model="$store.state.participant.observations" name="observations" placeholder="Observações" disabled="true"></textarea>
                        </div>
                    </painel>
                </modal>
    </div>
        </div>
    </div>
@endsection