@extends('layout.app',["current"=>"leiloes"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Leilões</h5>
            @if(count($leiloes) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código Leilão</th>
                        <th>Produto</th>
                        <th>Valor Lance</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($leiloes as $lei)
                        <tr>
                            <td>{{$lei->id}}</td>
                            <td>
                                @foreach($produtos as $prod)
                                    @if( $prod->id === $lei->produto_id )
                                        {{$prod->nome}}
                                    @endif
                                @endforeach
                            </td>
                            <!--td>
                                @foreach($pessoas as $pess)
                                    @if( $pess->id === $lei->pessoa_id )
                                        {{$pess->nome}}
                                    @endif
                                @endforeach
                            </td-->
                            <td>
                                @foreach($produtos as $prod)
                                    @if( $prod->id === $lei->produto_id )
                                        {{$prod->valor}}
                                    @endif
                                @endforeach
                            </td>

                            <td>
                                <a href="/leiloes/novolance/{{$lei->id}}" class="btn btn-sm btn-success">Lance</a>
                                <a href="/leiloes/editar/{{$lei->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/leiloes/apagar/{{$lei->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/leiloes/novo" class="btn btn-sm btn-primary" role="button">Novo Leilão</a>
        </div>
    </div>
@endsection