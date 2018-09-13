@extends('layouts.appVisitor')

@section('conteudo')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-5"><strong>Já tomou sua decisão de se tornar um Day Trader?</strong></h1>
                <p class="lead">Não tenha receio de investir em conhecimento!</p>
                <p class="lead">Investir em conhecimento vai te trazer sucesso e evitar perdar financeiras enormes. Acredite!</p>
                <p class="lead">Abaixo você vai conhecer o conteúdo dos nossos treinamentos. O conteúdo do treinamento presencial, online e VIP é o mesmo,
                    tudo o que está descrito abaixo será abordado, variando na forma de abordagem e no suporte.</p>
                <p class="lead">Conheça o nosso conteúdo e treinamentos, restando quais quer dúvidas nós estaremos ao seu dispor por meio dos nossos canais de atendimento.</p>
                <p class="lead"><strong>* Todos os treinamentos possuem 16 horas de conteúdo.</strong></p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #FED136;  text-align: center">
                    <h3>Conteúdo Programático</h3>
                </div>
                <div class="card-body">

                    <div class="card-body" style="background-color: lightgrey">
                        <div class="row">
                            <div class="col-md-6">
                                <ul style="text-align: left; font-size: 20px">
                                    <li>A Market e sua história
                                        <ul>
                                            <li>NASDAQ</li>
                                            <li>NYSE</li>
                                        </ul>
                                    </li>
                                    <li>Porque ser um Day-Trader?</li>
                                    <li>Quem faz o Mercado?</li>
                                    <li>Tipos de Traders</li>
                                    <li>Corretoras no Mercado Americano</li>
                                    <li>Stocks</li>
                                    <li>O Touro e o Urso</li>
                                    <li>Posições em uma Trade</li>
                                    <li>O que é Buying Power?</li>
                                    <li>Candles
                                        <ul>
                                            <li>Abertura e Fechamento</li>
                                            <li>Principais tipos</li>
                                            <li>Inversão de Candle</li>
                                        </ul>
                                    </li>
                                    <li>Tempos Gráficos</li>
                                    <li>As Médias Móveis</li>
                                    <li>Suporte e Resistência</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul style="text-align: left; font-size: 20px">

                                    <li>Setups
                                        <ul>
                                            <li>Você aprenderá os setups mais usados no Mercado Americano</li>
                                        </ul>
                                    </li>
                                    <li>O Level 2
                                        <ul>
                                            <li>Bid e Ask</li>
                                            <li>Size</li>
                                            <li>Volume</li>
                                        </ul>
                                    </li>
                                    <li>Time and Sales</li>
                                    <li>Volume de transações</li>
                                    <li>Tipos de Ordens</li>
                                    <li>Gerência de Risco
                                        <ul>
                                            <li>Definindo o Stop Loss</li>
                                            <li>Definindo o Stop Day</li>
                                            <li>Definindo a quantidade de Shares</li>
                                        </ul>
                                    </li>
                                    <li>Psicologia de Trade
                                        <ul>
                                            <li>Controle emocional</li>
                                            <li>Lidando com as perdas</li>
                                            <li>Traçando objetivos</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row" style="padding-bottom: 15px">
            <div class="col-md-4">
                <div class="card" style="height: 520px">
                    <div class="card-header" style="background-color: #1e7e34; color: white">
                        <h5>TREINAMENTO PRESENCIAL</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Treinamento baseado em 2 dias de sala de aula, onde você receberá todo o conteúdo teórico e fará sessões de simulador, onde poderá aplicar tudo o que foi ministrado
                            e mais 3 meses de acesso à sala online por <strong>uma hora</strong>, onde você terá a oportunidade de tirar as dúvidas que surgirem durante as suas operações. </p>
                            <p class="card-text"> Nessa sala, oportunamente
                            poderemos acresentar mais conteúdo que por algum motivo não conseguimos ministrar em sala, e também acrescentar conhecimentos que adquirimos durante esse processo. Afinal, assim como você
                            nós também estamos em constante evolução, e fazemos questão de passar essa evolução aos nossos alunos.  </p>
                    </div>
                    <div class="card-footer" >
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary" onclick="loadVisitorModalTrainings(1)">Comprar</a>
                            </div>
                            <div class="col-md-8">
                                <h4>Investimento: R$ 1.297,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 520px">
                    <div class="card-header" style="background-color: #1e7e34; color: white">
                        <h5>TREINAMENTO ONLINE</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Treinamento baseado em vido-aulas gravadas como total cuidado e atenção, visando a total abordagem do conteúdo.</p>
                        <p class="card-text">Diferente do treinamento presencial, essa modalidade não dá direito ao acesso a sala online. No entanto, esse acesso poderá ser adquirido separadamente.</p>
                    </div>
                    <div class="card-footer" >
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                            <div class="col-md-8">
                                <h4>Investimento: R$ 497,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 520px">
                    <div class="card-header" style="background-color: #1e7e34; color: white">
                        <h5>TREINAMENTO VIP</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nosso treinamento VIP aborda o mesmo conteúdo dos anteriores, mas caminha de acordo com a sua velocidade de aprendizagem.</p>
                        <p class="card-text">Você poderá dividir a carga horária em até 4 períodos de 4 horas. Tudo para te atender da melhor forma possível.</p>
                        <p class="card-text">Nesta modalidade você também terá direito aos 3 meses de acesso à sala online, assim como os alunos do treinamento presencial.</p>
                    </div>
                    <div class="card-footer" >
                        <div class="row">
                            <div class="col-md-4">
                                <a href="#" class="btn btn-primary">Comprar</a>
                            </div>
                            <div class="col-md-8">
                                <h4>Investimento: R$ 2.297,00</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Modal PRESENCIAL-->
    <div class="modal fade" id="presencial" tabindex="-1" role="dialog" aria-labelledby="presenciallLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Treinamentos Disponíveis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped" id="tableModalPlansVisitors">
                        <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Local</th>
                            <th scope="col">Vagas Restantes</th>
                            <th scope="col">Comprar</th>
                        </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>














@endsection