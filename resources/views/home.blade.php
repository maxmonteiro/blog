@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Dashboard">
            <p>Teste de Conteúdo</p>

            <div class="row">
                <div class="col-md-4">
                <caixa qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" cor="orange" icone="ion ion-pie-graph"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="5" titulo="Autores" url="#" cor="red" icone="ion ion-person"></caixa>
                </div>
            </div>


        </painel>
    </pagina>
@endsection


