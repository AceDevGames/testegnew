@extends('layout.app',["current"=>"leiloes"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/leiloes" method="post">

                <div class="form-group">
                    <label  class="mr-sm-2 sr-only" for="produto_id">Produto</label>
                        @foreach($produtos as $prod)
                            @if($prod->id === $leiloes->produto_id )
                            <input type="text" readonly class="form-control-plaintext" id="produto_id" value="{{$prod->nome}}">
                            @endif
                        @endforeach
                    </label>
                </div>
                <div class="form-group">
                    <label  class="mr-sm-2 sr-only" for="pessoa_id">Pessoa</label>
                    <select class="custom-select mr-sm-2" name="pessoa_id" id="pessoa_id">
                        <option selected>Escolha pessoa ...</option>
                        @foreach($pessoas as $pess)
                            <option value="{{$pess->id}}">{{$pess->nome}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="valorproduto">Valor do Produto</label>
                    <input type="text" class="form-control" name="lanceleilao"
                           id="lanceleilao" placeholder="Preencha o valor do lance!">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection