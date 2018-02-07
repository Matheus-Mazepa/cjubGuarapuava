@extends('layouts.app')

@section('content')
    <section id="parallaxBar" data-speed="6" data-type="background">
        <div class="container-fluid"></div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><label style="font-size: 30px">CJUB Guarapuava</label></div>
                   <div style="padding-left: 50px; padding-right: 50px;">
                       <div style="width: 100%; text-align: center; font-size: 40px;">
                           <label>Vagas restantes: {{$totalParticipants}}</label>
                           <div class="row">
                                <button type="button" onclick="location.href='{{ route('participants.create') }}'">Inscreva-se</button>
                           </div>
                       </div>
                       <div id="info">
                            <p class="text-justify" style="font-size: 15px;">A 45º edição do Congresso da Juventude Ucraíno-Brasileira (CJUB) promovido pela Associação dos Jovens Ucraíno-Brasilerios (AJUB), será realizada no ano de 2018, nos dias 05 e 06 de maio, na cidade de Guarapuava pelo grupo Jovens Assunção de Nossa Senhora (JANS), pertencente a Paróquia Assunção de Nossa Senhora Rito Ucraniano.</p>
                            <p class="text-justify" style="font-size: 15px;">A intenção do evento é promover a interação entre os jovens das várias comunidades ucranianas do Brasil, trazendo aprendizado sobre integração social, liderança, desenvolvimento pessoal e espiritual, assim como incentivar a manutenção das tradições herdadas, identidade e espírito ucraniano.</p>
                            <p class="text-justify" style="font-size: 15px;">Este contará com um cerimonial bílingue para abertura. Com o tema "O desafio da inclusão do jovem na comunidade Ucraíno-brasileira" e lema "Preservar as origens, a história, a cultura e a fé em um mundo de transformações", durante a estadia dos participantes ocorrerão quatro palestras, uma oficina escolhida no ato da inscrição dentre as três oferecidas, uma cerimônia liturgica e uma janta de confraternização.</p>
                       </div>
                       @include("home.programming")
                       @include("home.accommodation")
                       @include("home.speakers")
                   </div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection