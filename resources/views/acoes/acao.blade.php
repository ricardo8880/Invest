@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4 mt-5">Ação</h1>


    @foreach ($acao as $a)
    <div class="mt-3">
        <p class="container"><img id="image_acao" src="/img_acao/{{$a->image}}" alt="{{$a->image}}"></p>
        <ul class="row container m-auto ul_acoes">
            
            
                <li class="border-bottom col-sm-3"><strong>Nome - </strong>{{$a->nome}}</li>
                <li class="border-bottom col-sm-3"><strong>Ultimo - </strong>{{$a->ultimo}}</li>
                <li class="border-bottom col-sm-3"><strong>Maximo - </strong>{{$a->maximo}}</li>
                <li class="border-bottom col-sm-3"><strong>Minimo - </strong>{{$a->minimo}}</li>
                <li class="border-bottom col-sm-3"><strong>Variação - </strong>{{$a->variacao}}</li>
                <li class="border-bottom col-sm-3"><strong>Var - </strong>{{$a->var}}</li>
                <li class="border-bottom col-sm-3"><strong>Vol - </strong>{{$a->vol}}</li>
                <li class="border-bottom col-sm-3"><strong>Valor - </strong>{{$a->valor}}</li>
        
        </ul>
    </div>
    
    <p class="container mt-5"><a href="/comprar/{{$a->id_acao}}" onclick="alert('Sua compra foi feita com SUCESSO!')"><button class="btn btn-outline-dark">Comprar</button></a></p>
    @endforeach

    <div id="chartdois">

    </div>

    



@endsection
