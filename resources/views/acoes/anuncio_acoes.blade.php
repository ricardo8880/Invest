@extends('layout.layout')
@section('content')
    <h1 class="text-center display-4 mt-3">Ações Anunciadas</h1>

    <div class="container my-5">
        <p class="lead" style="font-size:40px;"><span class="text-success">Bem vindo (a)</span> {{$userName}}</p>
        <p>Suas ações Anunciadas está a Baixo!</p>
    </div>
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
                <li><a href="/deletar/{{$m->id_acao}}" class="btn btn-danger">Deletar</a></li>
                <li>
                                        <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Editar
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-warning">
                            <h5 class="modal-title m-auto" id="exampleModalLabel">Edite seu Formulario de Ação</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="">
                                    <form action="/update/{{$m->id_acao}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <p><input class="w-100" type="file" name="image"></p>
                                        <p><input class="w-100" type="text" name="nome" placeholder="Nome"></p>
                                        <p><input class="w-100" type="number" name="ultimo" placeholder="Último" required></p>
                                        <p><input class="w-100" type="number" name="maximo" placeholder="Máximo" required></p>
                                        <p><input class="w-100" type="number" name="minimo" placeholder="Minimo" required></p>
                                        <p><input class="w-100" type="number" name="variacao" placeholder="Variação" required></p>
                                        <p><input class="w-100" type="number" name="var" placeholder="Var%" required></p>
                                        <p><input class="w-100" type="number" name="vol" placeholder="Vol" required></p>
                                        <p><input class="w-100" type="number" name="valor" placeholder="valor da Ação" required></p>
                                        
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary" onclick="confirmarEnvio()">Enviar</button>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                        </div>
                    </div>
                </li>    
        </ul>
    </div>     
    @endforeach
    
@endsection
