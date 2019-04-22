@extends('layout.app',["current"=>"pessoas"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/pessoas" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomepessoa">Nome da Pessoa</label>
                    <input type="text" class="form-control" name="nomepessoa"
                           id="nomepessoa" placeholder="Preencha o nome da pessoa!">
                </div>

                <div class="form-group">
                    <label for="idadepessoa">Idade da Pessoa</label>
                    <input type="text" class="form-control" name="idadepessoa"
                           id="idadepessoa" placeholder="Preencha a idade da pessoa!">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection