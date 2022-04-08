@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4 my-5">Ações</h1>

    @foreach ($acoes as $a)
    <div class="mt-3">
        <ul class="row container m-auto ul_acoes">
            <img src="/img_acao/{{$a->image}}" alt="{{$a->image}}" id="image_acao">
            
                <li class="border-bottom col-sm"><strong>Nome - </strong>{{$a->nome}}</li>
                <li class="border-bottom col-sm"><strong>Ultimo - </strong>{{$a->ultimo}}</li>
                <li class="border-bottom col-sm"><strong>Maximo - </strong>{{$a->maximo}}</li>
                <li class="border-bottom col-sm"><strong>Minimo - </strong>{{$a->minimo}}</li>
                <li class="btn_acoes"><a href="/acao/{{$a->id_acao}}" class="btn btn-dark">Saiba Mais</a></li>
            
        </ul>
    </div>     
    @endforeach
    
@endsection

