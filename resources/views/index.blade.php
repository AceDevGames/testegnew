@extends('layout.app',["current"=>"home"])
@section('body')
    <h1>Sistema de Leilões</h1>
    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Lista de produtos
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Pessoas</h5>
                        <p class="card-text">
                            Lista de pessoas
                        </p>
                        <a href="/pessoas" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
                <div class="card border border-primary">
                <div class="card-body">
                    <h5 class="card-title">Cadastro de Leiloes</h5>
                    <p class="card-text">
                        Lista de Leilões
                    </p>
                    <a href="/leiloes" class="btn btn-primary">Cadastrar</a>
                </div>
                </div>

        </div>
    </div>
@endsection