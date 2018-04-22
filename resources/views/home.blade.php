@extends('layouts.app')

@section('content')
    <div id="parallaxBar">
    </div>
    <div class="container" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><label style="font-size: 30px">CJUB Guarapuava</label></div>
                   <div style="padding-left: 50px; padding-right: 50px;">
                       <div style="width: 100%; text-align: center; font-size: 40px;">
                           {{--<label>Vagas restantes: {{$totalParticipants}}</label>--}}
                           <label for="">Inscrições encerradas!</label>
                           {{--<div class="row">--}}
                               {{--<a href="{{route('participants.create')}}" class="btn btn-default btn-lg">Inscreva-se</a>--}}
                           {{--</div>--}}
                       </div>
                       <div id="info">
                            <p class="text-justify" style="font-size: 15px;">A 45º edição do Congresso da Juventude Ucraíno-Brasileira (CJUB) promovido pela Associação dos Jovens Ucraíno-Brasilerios (AJUB), será realizada no ano de 2018, nos dias 05 e 06 de maio, na cidade de Guarapuava pelo grupo Jovens Assunção de Nossa Senhora (JANS), pertencente a Paróquia Assunção de Nossa Senhora Rito Ucraniano.</p>
                            <p class="text-justify" style="font-size: 15px;">A intenção do evento é promover a interação entre os jovens das várias comunidades ucranianas do Brasil, trazendo aprendizado sobre integração social, liderança, desenvolvimento pessoal e espiritual, assim como incentivar a manutenção das tradições herdadas, identidade e espírito ucraniano.</p>
                            <p class="text-justify" style="font-size: 15px;">Este contará com um cerimonial bílingue para abertura. Com o tema "O desafio da inclusão do jovem na comunidade Ucraíno-brasileira" e lema "Preservar as origens, a história, a cultura e a fé em um mundo de transformações", durante a estadia dos participantes ocorrerão quatro palestras, uma oficina escolhida no ato da inscrição dentre as três oferecidas, uma cerimônia liturgica e uma janta de confraternização.</p>
                       </div>
                       @include("home.programming")
                       @include("home.accommodation")
                       @include("home.speakers")
                       @include("home.climate")
                       @include("home.tourism")
                       <h3>Apoio:</h3>
                       <div class="col-sm-4">
                           <img class="img-responsive" src="/images/LogoGuairaca.png" alt="Logo faculdade Guairaca">
                       </div>
                       <div class="col-sm-4">
                           <img class="img-responsive" src="/images/raiher.png" alt="Logo faculdade Guairaca">
                       </div>
                       <div class="col-sm-3">
                           <img class="img-responsive" src="/images/colegio fera.png" alt="Logo faculdade Guairaca">
                       </div>
                   </div>
                    <div class="col-sm-12" style="text-align: center;">
                        <div class="row">
                            <h3>Localização</h3>
                        </div>
                    </div>
                    <div id="location" class="col-sm-12" style="text-align: center; padding-top: 50%;">
                        <div>
                            <iframe allowfullscreen class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14417.32323692419!2d-51.4450579!3d-25.393735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x84ca286804a8b49!2sCasa+De+Lideres+Nossa+Senhora+De+Guadalupe!5e0!3m2!1spt-BR!2sbr!4v1524010143063" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
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
