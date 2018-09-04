
{{-- APRESENTAÇÃO DOS ERROS DE VALIDAÇÃO --}}
    @if(isset($errors))
        @if( count($errors) != 0)

            <div class="alert alert-danger fade show" role="alert" style="text-align: left">

                {{-- TITULO DA CAIXA --}}
                @if(count($errors) == 1)
                    <p style="font-weight: bold;font-size: 20px">ERRO:</p>
                @else
                    <p style="font-weight: bold;font-size: 20px">ERROS:</p>
                @endif
                {{-- LISTA DOS ERROS --}}
                <ul>
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>

            </div>

        @endif
    @endif

{{-- =============================================================== --}}
{{-- Erros DB --}}

    @if(isset($erroDb))

        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: left">
            @foreach($erroDb as $erro)
                <p>{{$erro}}</p>
            @endforeach
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>

    @endif

{{-- =============================================================== --}}
{{-- Confirmações Positivas--}}

    @if(isset($msgcreatefree))

        <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: left">
            <p style="font-weight: bold;font-size: 20px">Parabéns!</p>
            <p>Agora você tem acesso ao curso <strong>Introdução ao Day Trade no Mercado Americano</strong></p>
            <p>Você receberá um e-mail contendo sua senha de acesso a sua área exclusiva.</p>
            <p>A Spartacus Traders está a sua disposição e te acompanhará nessa incrível jornada!</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    @if(isset($msgcreate))

        <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align: left">
            <p style="font-weight: bold;font-size: 20px">{{$msgcreate}}!</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif
