@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualisar</h1> <hr>

    <div class="text-center mt-3 mb-4">
      <a href="#">
        <button class="btn btn-success">Visualisar</button>
      </a>
    </div>

    <div class="col-8 m-auto">
        <ul class="list-group">
            <li class="list-group-item bg-dark text-white">Nome: {{$cliente->nome}}</li>
            <li class="list-group-item">Razão Social: {{$cliente->razao_social}}</li>
            <li class="list-group-item">CNPJ: {{$cliente->cnpj}}</li>
            <li class="list-group-item">Data de cadastro: {{$cliente->data_inclusao}}</li>
        </ul>
    </div>
@endsection