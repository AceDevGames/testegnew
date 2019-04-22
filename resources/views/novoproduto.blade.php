@extends('layout.app',["current"=>"produtos"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeproduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeproduto"
                           id="nomeproduto" placeholder="Preencha o nome do produto!">
                </div>

                <div class="form-group">
                    <label for="valorproduto">Valor do Produto</label>
                    <input type="text" class="form-control" name="valorproduto"
                           id="valorproduto" placeholder="Preencha o valor do produto!">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection