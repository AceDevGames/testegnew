@extends('layout.app',["current"=>"Lances"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Lances por Pessoa</h5>
            @if(count($lances) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código lance</th>
                        <th>Produto</th>
                        <th>Valor Lance</th>
                        <th>Autor</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lances as $lan)
                        <tr><
                            <td>{{$lan->id}}</td>
                            <td>

                                @foreach($produtos as $prod)
                                    @if( $prod->id === $lan->produto_id )
                                        {{$prod->nome}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                            {{$lan->valor}}
                            <!--     @if( $prod->id === $lan->produto_id )

                            @endif -->
                            </td>
                            <td>
                                @foreach($pessoas as $pess)
                                    @if( $pess->id === $lan->pessoa_id )
                                        {{$pess->nome}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a href="/leiloes/novolance/{{$lan->id}}" class="btn btn-sm btn-success">Lance</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection