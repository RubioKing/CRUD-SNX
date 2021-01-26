@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1> <hr>

    <div class="col-8 m-auto">
      
      @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2">
          @foreach ($errors->all() as $erro)
            {{$erro}}<br>
          @endforeach
        </div> 
      @endif
      
      <form name="cadastraCliente" id="cadastraCliente" method="POST" action="{{url('clientes')}}">
        @csrf
        <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome " required>
        <select class="form-control" name="id_user" id="id_user" required>
          <option value="">Selecione</option>
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <input class="form-control" type="text" name="razaosocialCliente" id="razaosocialCliente" placeholder="Razão Social " required>
        <input class="form-control" type="text" name="cnpjCliente" id="cnpjCliente" placeholder="CNPJ" required>
        <input class="form-control" type="date" name="dataCriacaoCliente" id="dataCriacaoCliente" placeholder="Data de Criação" required>
        <input class="btn btn-primary" type="submit" value="Cadastrar">
      </form>
    </div>
@endsection