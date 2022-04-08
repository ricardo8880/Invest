@extends('layout.layout')

@section('content')


        <div class="container my-5 col-sm-5 p-5 border">
            <form action="/cadastro" method="POST" enctype="multipart/form-data">
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
                <p><button class="btn btn-dark">Enviar</button></p>
            </form>
        </div>

@endsection
