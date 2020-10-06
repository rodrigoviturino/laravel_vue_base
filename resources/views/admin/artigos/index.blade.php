@extends('layouts.app')

@section('content')

  <pagina tamanho="12">
    <painel titulo="Lista de Artigos">
     
      <tabela-lista 
      v-bind:titulos="['#', 'Titulo', 'Descrição']" v-bind:itens="[[1, 'PHP OO','Curso de PHP Completo'], [2,'VUE', 'Curso de VUE.js']]"></tabela-lista>

    </painel>
  </pagina>
@endsection
