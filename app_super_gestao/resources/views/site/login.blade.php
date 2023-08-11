@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')

@include('site.layouts._partials.topo')

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Login</h1>
    </div>
    <div class="informacao-pagina">
        <h4>formulário de login</h4>
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form action="{{ route('site.login')}}" method="POST">
                @csrf
                <input type="text" name="usuario" value="{{ old('usuario') }}" placeholder="Usuário..." class="borda-preta">
                {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
                <input type="password" name="senha" value="{{ old('senha') }}" class="borda-preta" placeholder="Senha...">
                {{ $errors->has('senha') ? $errors->first('senha') : ''}}
                <button type="submit" class="borda-preta">Acessar</button>
            </form>
            {{ isset($erro) && $erro != '' ? $erro : '' }}
        </div>
    </div>
</div>

@include('site.layouts._partials.footer')

@endsection