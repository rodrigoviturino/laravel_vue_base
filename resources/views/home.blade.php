@extends('layouts.app')

@section('content')

  <pagina tamanho="8">
    <painel titulo="Dashboard">
      Conteudo Painel

      <div class="row">
        <div class="col-md-4">
        <caixa qtd="22" titulo="Artigos" url="{{route("artigos.index")}}" cor="gray" icone="ion ion-person-add"></caixa>
        </div>
        <div class="col-md-4">
        <caixa qtd="80" titulo="Games" url="{{route("artigos.index")}}" cor="purple" icone="ion-ios-game-controller-b-outline"></caixa>
        </div>
        <div class="col-md-4">
        <caixa qtd="268" titulo="Posts" url="{{route("artigos.index")}}" cor="blue" icone="ion-pound"></caixa>
        </div>
      </div>

    </painel>
  </pagina>
@endsection
