@extends('app.layouts.basico')

@section('titulo', 'Listagem')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Listar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 50%; margin-left: auto; margin-right: auto;">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Site</th>
                        <th>UF</th>
                        <th>E-mail</th>
                        <th>Excluir</th>
                        <th>Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($queryFornecedor as $fornecedor)
                    <tr>
                        <td style="width: 1000px;">{{$fornecedor->nome}}</td>
                        <td>{{$fornecedor->site}}</td>
                        <td style="width: 500px;">{{$fornecedor->uf}}</td>
                        <td style="width: 1000px;">{{$fornecedor->email}}</td>
                        <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                        <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
             {{ $queryFornecedor->appends($request)->links() }}
            <br>
            <!-- {{ $queryFornecedor->count() }}
            <br>
            {{ $queryFornecedor->total() }}
            <br>
            {{ $queryFornecedor->firstItem() }} -->
            <br>
            Exibindo {{ $queryFornecedor->count() }} fornecedores de {{ $queryFornecedor->total() }}
        </div>
    </div>

</div>
@endsection