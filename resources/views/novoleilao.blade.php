@extends('layout.app',["current"=>"leiloes"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/leiloes" method="post">
                @csrf

                <div class="form-group">
                    <label  class="mr-sm-2 sr-only" for="produto_id">Produto</label>
                    <select class="custom-select mr-sm-2" name="produto_id" id="produto_id">
                        <option selected>Escolha o produto...</option>
                        @foreach($produtos as $prod)
                            <option value="{{$prod->id}}">{{$prod->nome}}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="valorproduto">Valor mínimo do Produto</label>
                    <input type="text" class="form-control" name="lanceleilao"
                           id="lanceleilao" placeholder="Preencha o valor minimo do Leilão">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection