@extends('layout.app',["current"=>"pessoas"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Lista de Pessoas</h5>
            @if(count($pessoas) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome da Pessoa</th>
                        <th>Idade</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pessoas as $pess)
                        <tr>
                            <td>{{$pess->id}}</td>
                            <td>{{$pess->nome}}</td>
                            <td>{{$pess->idade}}</td>
                            <td>
                                <a href="/lances/listalances/{{$pess->id}}" class="btn btn-sm btn-primary">Lances</a>
                                <a href="/pessoas/editar/{{$pess->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/pessoas/apagar/{{$pess->id}}" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/pessoas/novo" class="btn btn-sm btn-primary" role="button">Nova Pessoa</a>

        </div>
    </div>
@endsection