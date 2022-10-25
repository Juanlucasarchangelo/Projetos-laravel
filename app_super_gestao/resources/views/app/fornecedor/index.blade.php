<h1>Chegou aqui</h1>

{{-- Este comentário não é lido pelo browser --}}

<!-- Este aqui ja aparece -->

@php
    


@endphp

@isset($fornecedores)
    <h3>Fornecedo: {{ $fornecedores[0]['nome'] }}</h3>
    <h3>Status: {{ $fornecedores[0]['status'] }}</h3>
    @isset($fornecedores[0]['cnpj'])
        <h3>CNPJ: {{ $fornecedores[0]['cnpj'] }}</h3>
        @empty($fornecedores[0]['cnpj'])
            <p>vazio</p>
        @endempty
    @endisset
    <br>
    <h3>Fornecedo: {{ $fornecedores[1]['nome'] }}</h3>
    <h3>Status: {{ $fornecedores[1]['status'] }}</h3>
    @isset($fornecedores[1]['cnpj'])
        <h3>CNPJ: {{ $fornecedores[1]['cnpj'] }}</h3>
        @empty($fornecedores[1]['cnpj'])
            <p>vazio</p>
        @endempty
    @endisset
@endisset
