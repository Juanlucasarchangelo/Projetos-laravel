<h1>Chegou aqui</h1>

{{-- Este comentário não é lido pelo browser --}}

<!-- Este aqui ja aparece -->

@php
    


@endphp

@isset($fornecedores)
    @foreach ( $fornecedores as $fornec => $fornecedor)
        {{-- @dd($fornec); --}}
        <h3>Fornecedo: {{ $fornecedor['nome'] }}</h3>
        <h3>Status: {{ $fornecedor['status'] }}</h3>
        <h3>CNPJ: {{ $fornecedor['cnpj'] ?? '000.000.000-00'}}</h3>        
    @endforeach
@endisset