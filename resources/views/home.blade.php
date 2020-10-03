@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <painel titulo="Dashboard">
          Conteudo Painel

          <div class="row">
            <div class="col-md-4">
              <painel titulo="conteudo 1">Lorem Ipsum 1</painel>
            </div>
            <div class="col-md-4">
              <painel titulo="conteudo 1">Lorem Ipsum 2</painel>
            </div>
            <div class="col-md-4">
              <painel titulo="conteudo 1">Lorem Ipsum 3</painel>
            </div>
          </div>

        </painel>
      </div>
    </div>
  </div>

@endsection
