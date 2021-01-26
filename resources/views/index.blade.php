@extends('template')

@section('content')
    <h1 class="text-center">Crud</h1> <hr>

    <div class="text-center mt-3 mb-4">
      <a href="#">
        <button class="btn btn-success">Cadastrar</button>
      </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Nome</th>
                <th scope="col">Razao Social</th>
                <th scope="col">Cnpj</th>
                <th scope="col">Data da Inclusão</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($cliente as $clientes)
                  @php
                    $user = $clientes->find($clientes->id)->relUsers;    
                  @endphp
                  <tr>
                    <th scope="row">{{$clientes->id}}</th>
                    <td>{{$clientes->nome}}</td>
                    <td>{{$clientes->razao_social}}</td>
                    <td>{{$clientes->cnpj}}</td>
                    <td>{{$clientes->data_inclusao}}</td>
                    <td>
                      <a href="#">
                        <button class="btn btn-dark">Visualisar</button>
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <button class="btn btn-primary">Editar</button>
                      </a>
                    </td>
                    <td>
                      <a href="#">
                        <button class="btn btn-danger">Deletar</button>
                      </a>
                    </td>
                    
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection