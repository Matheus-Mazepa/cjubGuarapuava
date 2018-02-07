@if (\Carbon\Carbon::now()->between(\Carbon\Carbon::create(2018,02,06), \Carbon\Carbon::create(2018,04,06)) && env('OPEN_REGISTRATIONS', false))
    @if($total <= 150)
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Inscreva-se</h1>
<div>
    <p>
        {!! Form::label('name', 'Nome (*)') !!}
    </p>
    {!! Form::text('name') !!}
</div>
<div>
    <p>
        {!! Form::label('cpf', 'CPF (*)') !!}
    </p>
    {!! Form::text('cpf', null, ['id'=>'cpf']) !!}
</div>
<div>
    <p>
        {!! Form::label('address', 'Endereço') !!}
    </p>
    {!! Form::text('address') !!}
</div>
<div>
    <p>
        {!! Form::label('community', 'Comunidade (*)') !!}
    </p>
    {!! Form::text('community') !!}
</div>
<div>
    {!! Form::label('size_t_shirt', 'Tamanho da camiseta (*)') !!}
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
    <div>
        <p>
            {!! Form::label('babylook', 'babylook? (*)') !!}
        </p>
        <label>
            {!! Form::radio('babylook', '1'); !!}
            Sim
        </label>
        <label>
            {!! Form::radio('babylook', '0'); !!}
            Não
        </label>
    </div>
<div>
    <p>
        {!! Form::label('phone', 'Telefone') !!}
    </p>
    {!! Form::text('phone') !!}
</div>
<div>
    <p>
        {!! Form::label('email', 'E-mail (*)') !!}
    </p>
    {!! Form::email('email') !!}
</div>
<div>
    <p>
        {!! Form::label('birth_date', 'Data de Nascimento (Maiores de 16 anos)') !!}
    </p>
    {!! Form::text('birth_date', null, ['class'=>'datepicker']) !!}
</div>
<div>
    <p>
        {!! Form::label('has_special_needs', 'Necessidades Especiais? (*)') !!}
    </p>
    <label>
        {!! Form::radio('has_special_needs', '1'); !!}
        Sim
    </label>
    <label>
        {!! Form::radio('has_special_needs', '0'); !!}
        Não
    </label>
</div>
<div>
    <p>
        {!! Form::label('special_needs', 'Quais necessidades') !!}
    </p>
    {!! Form::text('special_needs') !!}
</div>
    <div>
        <p>
            {!! Form::label('arrives_on_friday', 'Dia da chegada (*)') !!}
        </p>
        <label>
            {!! Form::radio('arrives_on_friday', '1'); !!}
            Sexta
        </label>
        <label>
            {!! Form::radio('arrives_on_friday', '0'); !!}
            Sábado
        </label>
    </div>
<div>
    <p>
    {!! Form::label('needs_transport', 'Precisará de transporte durante o evento dentro da cidade em Guarapuava/PR?') !!}
    {!! Form::label('needs_transport', ' (Translado entre rodoviaria e local do evento)') !!}
    </p>
    <label>
        {!! Form::radio('needs_transport', '1'); !!}
        Sim
    </label>
    <label>
        {!! Form::radio('needs_transport', '0'); !!}
        Não
    </label>
</div>
<div>
    <p>
        {!! Form::label('workshop_id', 'Oficina que deseja fazer') !!}
    </p>
    {!! Form::select('workshop_id', $workshops, null, ['placeholder' => 'Selecione uma oficina']) !!}
</div>
<div>
    <p>
        {!! Form::label('observations', 'Observações') !!}
    </p>
    {!! Form::textarea('observations') !!}
</div>
    {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
    @else
        <h2>Inscrições esgotadas!</h2>
    @endif
@else
    <h2>As inscrições iniciarão dia 05 de Fevereiro de 2018</h2>
@endif
