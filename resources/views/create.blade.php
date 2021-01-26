@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1> <hr>

    <div class="col-8 m-auto">
      <form name="cadastraCliente" id="cadastraCliente" method="POST" action="{{url('clientes')}}">
        @csrf
        <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome ">
        <select class="form-control" name="id_user" id="id_user">
          <option value="">Selecione</option>
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <input class="form-control" type="text" name="razaosocialCliente" id="razaosocialCliente" placeholder="Razão Social ">
        <input class="form-control" type="text" name="cnpjCliente" id="cnpjCliente" placeholder="CNPJ">
        <input class="form-control" type="date" name="dataCriacaoCliente" id="dataCriacaoCliente" placeholder="Data de Criação">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
      </form>
    </div>
@endsection