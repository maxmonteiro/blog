@extends('layouts.app')

@section('content')
    <pagina tamanho="12">

        @if($errors->all())
            <div class="alert alert-danger alert-dismissible text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @foreach ($errors->all() as $key => $value)
                    <li><strong>{{$value}}</strong></li>
                @endforeach
            </div>
            
        @endif

        <painel titulo="Lista de Artigos">
            <migalhas v-bind:lista="{{ $listaMigalhas }}"></migalhas>

            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>-->
            

            <tabela-lista 
                v-bind:titulos="['#','Título','Descrição','Data']"
                v-bind:itens="{{ $listaArtigos }}"
                ordem="desc" ordemcol="1"
                criar="#criar" detalhe="/admin/artigos/" editar="#editar" deletar="#deletar" token="615431566" modal="sim">
            </tabela-lista>
        </painel>
    </pagina>

    <!-- Modal component -->
    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formAdicionar" css="" action="{{route('artigos.store')}}" method="post" ecntype="" token="{{csrf_token()}}">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="{{old('titulo')}}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{old('descricao')}}">
            </div>
            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo">{{old('conteudo')}}</textarea>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="datetime-local" class="form-control" id="data" name="data" value="{{old('data')}}">
            </div>
        </formulario>
        <span slot="botoes">
            <button form="formAdicionar" class="btn btn-success">Adicionar</button>
        </span>
    </modal>

    <modal nome="editar" titulo="Editar">
        <formulario id="formEditar" css="" action="#" method="post" ecntype="" token="12345">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título"
                v-model="$store.state.item.titulo">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição"
                v-model="$store.state.item.descricao">
            </div>
        </formulario>
        <span slot="botoes">
            <button form="formEditar" class="btn btn-success">Atualizar</button>
        </span>
    </modal>

    <modal nome="detalhe" v-bind:titulo="$store.state.item.titulo">
        <p>@{{$store.state.item.descricao}}</p>
        <p>@{{$store.state.item.conteudo}}</p>
    </modal>
@endsection
