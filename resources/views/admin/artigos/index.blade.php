@extends('layouts.app')

@section('content')
    <pagina tamanho="10">
        <painel titulo="Lista de Artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meuModalTeste">Large modal</button>-->
            <modal-link tipo="buttons" nome="meuModalTeste" titulo="Criar" css=""></modal-link>

            <tabela-lista 
                v-bind:titulos="['#','Título','Descrição']"
                v-bind:itens="[[1,'PHP OO','Curso de PHP'],[2,'Vue JS','Curso de Vue JS'],[3,'Java OO','Curso de Java']]"
                ordem="desc" ordemcol="1"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="615431566">
            </tabela-lista>
        </painel>
    </pagina>

    <!-- Modal component -->
    <modal nome="meuModalTeste">
        <painel titulo="Modal">
            <div class="form-group has-success">
                <label class="control-label" for="inputSuccess1">Input with success</label>
                <input type="text" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
                <span id="helpBlock2" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning1">Input with warning</label>
                <input type="text" class="form-control" id="inputWarning1">
            </div>
            <div class="form-group has-error">
                <label class="control-label" for="inputError1">Input with error</label>
                <input type="text" class="form-control" id="inputError1">
            </div>
            <div class="has-success">
                <div class="checkbox">
                <label>
                    <input type="checkbox" id="checkboxSuccess" value="option1">
                    Checkbox with success
                </label>
                </div>
            </div>
            <div class="has-warning">
                <div class="checkbox">
                <label>
                    <input type="checkbox" id="checkboxWarning" value="option1">
                    Checkbox with warning
                </label>
                </div>
            </div>
            <div class="has-error">
                <div class="checkbox">
                <label>
                    <input type="checkbox" id="checkboxError" value="option1">
                    Checkbox with error
                </label>
                </div>
            </div>
        </painel>

    </modal>
@endsection
