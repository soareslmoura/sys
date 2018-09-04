@extends('layouts.appVisitor')

@section('conteudo')
    <div class="jumbotron">
        <h1 class="display-4">Bem vindo!</h1>
        <p class="lead">Nós estamos muito felizes pelo seu interesse em nosso conteúdo!</p>
        <p class="lead">Nossa missão é levar o conhecimento do Day Trade no mercado americano a todos os brasileiros.
            Vamos te mostrar como é possível ter resultados consistentes com técnicas assertivas e operações seguras.</p>
        <p class="lead">Em nosso curso Introdução ao Day Trade no Mercado Americano você terá acesso a conhecimentos muito pouco difundidos no Brasil. Terá um pouco do que nosso alunos têm em nosso curso presencial
            e poderá testar nosso conhecimento antes de fazer qualquer investimento em nosso treinamento.
        </p>
        <p class="lead">Esperamos que você aproveite e desfrute do que aprender aqui e que esse conhecimento lhe ajude a tomar a sua decisão sobre ser tornar ou não um DAY TRADER.</p>
        <p class="lead">Fique à vontade para entrar em contato conosco por meio do nosso formulário de contato, nosso e-mail ou número de telefone.</p>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contato Spartacus Traders</h5>
                <div class="card-body">
                    <form action="/visitor/create" method="post">
                        {{-- CSRF--}}
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" placeholder="Assunto *" title=" " >

                                </div>
                                <div class="form-group">
                                    <textarea rows="6" placeholder="Mensagem *" class="form-control phone_with_ddd" name="msg" id="msg"></textarea>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>





    </div>
@endsection