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
                    </tr>
                </thead>
                <tbody>
                    @foreach($queryFornecedor as $fornecedor)
                    <tr>
                        <td style="width: 1000px;">{{$fornecedor->nome}}</td>
                        <td>{{$fornecedor->site}}</td>
                        <td style="width: 500px;">{{$fornecedor->uf}}</td>
                        <td style="width: 1000px;">{{$fornecedor->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection