@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4 mt-3">Minhas Ações</h1>
    
    @foreach ($minhasAcoes as $m)
    <div class="mt-3">
        <p class="container"><img id="image_acao" src="/img_acao/{{$m->image}}" alt="{{$m->image}}"></p>
        <ul class="row container m-auto ul_acoes">
            
            
                <li class="border-bottom col-sm-3"><strong>Nome - </strong>{{$m->nome}}</li>
                <li class="border-bottom col-sm-3"><strong>Ultimo - </strong>{{$m->ultimo}}</li>
                <li class="border-bottom col-sm-3"><strong>Maximo - </strong>{{$m->maximo}}</li>
                <li class="border-bottom col-sm-3"><strong>Minimo - </strong>{{$m->minimo}}</li>
                <li class="border-bottom col-sm-3"><strong>Variação - </strong>{{$m->variacao}}</li>
                <li class="border-bottom col-sm-3"><strong>Var - </strong>{{$m->var}}</li>
                <li class="border-bottom col-sm-3"><strong>Vol - </strong>{{$m->vol}}</li>
                <li class="border-bottom col-sm-3"><strong>Valor - </strong>{{$m->valor}}</li>
        
        </ul>
    </div>
    @endforeach
    
    <div id="chartUM" class="col-md-4 m-auto">

    </div>

    <div class="col-md-6 m-auto py-5">
        <div class="row m-0 ">
            <div class="col-md-6">
                <p>
                    <input class="w-100" type="number" name="acao_um" id="acaoum" placeholder="Valor investido 1" > 
                </p>
                <p>
                    <input class="w-100" type="number" name="acao_dois" id="acaodois" placeholder="Valor investido 2">
                </p>
                <p>
                    <input class="w-100" type="number" name="acao_tres" id="acaotres" placeholder="Valor investido 3">
                </p>
                <p>
                    <input class="w-100" type="number" name="acao_quatro" id="acaoquatro" placeholder="Valor investido 4">
                </p>
                <p>
                    <input class="w-100" type="number" name="acao_cinco" id="acaocinco" placeholder="Valor investido 5">
                </p>
            </div>
            
            <div class="col-md-6">
                <p><input class="w-100" type="text" id="nomeAcao1" placeholder="Nome da Ação 1"></p>
                <p><input class="w-100" type="text" id="nomeAcao2" placeholder="Nome da Ação 2"></p>
                <p><input class="w-100" type="text" id="nomeAcao3" placeholder="Nome da Ação 3"></p>
                <p><input class="w-100" type="text" id="nomeAcao4" placeholder="Nome da Ação 4"></p>
                <p><input class="w-100" type="text" id="nomeAcao5" placeholder="Nome da Ação 5"></p>
            </div>           
        </div>
        <p class="text-center"><button id="calcular_acao" class="px-5 btn btn-dark">Enviar</button></p>
    </div>






    
    


@endsection