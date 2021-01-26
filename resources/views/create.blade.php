@extends('templates.template')

@section('content')
    <h1 class="text-center">
      <!-- VERIFICA SE ESTÁ EDITANDO OU CADASTRANDO NOVO CLIENTE.  -->
      @if (isset($cliente)) 
        Editar 
      @else 
        Cadastrar 
      @endif  
    </h1> <hr>

    <div class="col-8 m-auto">
      
      @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2">
          @foreach ($errors->all() as $erro)
            {{$erro}}<br>
          @endforeach
        </div> 
      @endif
      
      <!-- VERIFICA SE ESTÁ EDITANDO OU CADASTRANDO E ALTERA O TIPO DE FORMULÁRIO -->
      @if (isset($cliente))
        <form name="editaCliente" id="editaCliente" method="POST" action="{{url("clientes/$cliente->id")}}">
          @method('PUT')  
      @else
        <form name="cadastraCliente" id="cadastraCliente" method="POST" action="{{url("clientes")}}">
      @endif
      
        @csrf
        <input class="form-control" type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome" value="{{$cliente->nome ?? ''}}" required>
        <select class="form-control" name="id_user" id="id_user" required>
          <option value="{{$cliente->relUsers->id_user ?? ''}}">{{$cliente->relUsers->name ?? 'Selecione'}}</option>
          @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        <input class="form-control" type="text" name="razaosocialCliente" id="razaosocialCliente" placeholder="Razão Social " value="{{$cliente->razao_social ?? ''}}" required>
        <input class="form-control" type="text" name="cnpjCliente" id="cnpjCliente" placeholder="CNPJ" value="{{$cliente->cnpj ?? ''}}" required>
        @if (isset($cliente))
          <!-- CAMPO VAZIO POIS SÓ PRECISAMOS DO ELSE -->    
        @else
          <input class="form-control" type="date" name="dataCriacaoCliente" id="dataCriacaoCliente" placeholder="Data de Criação" required>
        @endif
        
        <!-- MESMA CONDIÇÃO LÁ DE CIMA PARA O BOTÃO -->
        <input class="btn btn-primary" type="submit" value="@if (isset($cliente)) Editar @else Cadastrar @endif">
      </form>
    </div>
@endsection