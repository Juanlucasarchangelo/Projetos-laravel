@extends('app.layouts.basico')

@section('titulo', 'Adicionar')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <p>Fornecedor - Adicionar</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('app.fornecedor.adicionar') }}" method="post">
                <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                @csrf
                <input class="borda-preta" value="{{ $fornecedor->nome ?? old('nome') }}" type="text" name="nome" placeholder="Nome">
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                <input class="borda-preta" value="{{ $fornecedor->site ?? old('site') }}" type="text" name="site" placeholder="Site">
                {{ $errors->has('site') ? $errors->first('site') : '' }}
                <input class="borda-preta" value="{{ $fornecedor->uf ?? old('uf') }}" type="text" name="uf" placeholder="Uf">
                {{ $errors->has('uf') ? $errors->first('uf') : '' }}
                <input class="borda-preta" value="{{ $fornecedor->email ?? old('email') }}" type="text" name="email" placeholder="E-mail">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
                <button type="submit" class="borda-preta">Salvar</button>
            </form>
            @if (isset($mensagem))
                <div style="background-color: green; color: white; padding-top: 15px; padding-bottom: 15px; padding-left: 20px; padding-right: 20px; position: fixed; bottom: 10px; right: 10px;">
                    {{ $mensagem }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection