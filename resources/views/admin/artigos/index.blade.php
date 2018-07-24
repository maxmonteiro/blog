@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Lista de Artigos">
            <tabela-lista 
                v-bind:titulos="['#','Título','Descrição']"
                v-bind:itens="[[1,'PHP OO','Curso de PHP'],[2,'Vue JS','Curso de Vue JS'],[3,'Java OO','Curso de Java']]"
                ordem="desc" ordemcol="1"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="615431566">
            </tabela-lista>
        </painel>
    </pagina>
@endsection
