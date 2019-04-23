@extends('layout.app',["current"=>"lances"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/lances" method="post">
            @csrf <!-- {{ csrf_field() }} -->

                <input type="hidden" id="leilao_id" name="leilao_id" value="{{$leiloes->id}}">

                <div class="row" align="center" >
                    <div class="card-deck" align="center">
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Produto</h5>
                                <p class="card-text">
                                    @foreach($produtos as $prod)
                                        @if($prod->id === $leiloes->produto_id )
                                            <input type="text" readonly class="form-control-plaintext" name="produto_id" id="produto_id" value="{{$prod->nome}}">
                                            <input type="hidden" id="idprodutoo_id" name="idprodutoo_id" value="{{$prod->id}}">
                                        @endif
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="card border border-primary">
                            <div class="card-body">
                                <h5 class="card-title">Valor Atual do Lance</h5>
                                <p class="card-text">
                                    <input type="text" readonly class="form-control-plaintext" id="lancevalor" value="{{$leiloes->valor}}">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <label    for="pessoa_id">Pessoa</label>
                    <select class="custom-select mr-sm-2" name="pessoa_id" id="pessoa_id">
                        <option selected>Escolha pessoa a dar o lance ...</option>
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