<h3>Fornecedor</h3>

{{-- <p>O comentário abaixo não aparece no inspecionar do Chrome</p> --}}
{{-- Aqui fica o comentário que fica descartado --}}

{{-- <p>O comentário abaixo aparece no inspecionar do Chrome</p> --}}
<!-- aqui -->

@php
    
@endphp
{{-- @dd($fornecedoresArrayMult) --}}

{{-- @if (count($fornecedores) && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}

@foreach ($fornecedoresArrayMult as $indice => $fornecedor)
    Fornecedor: {{ $fornecedor['nome'] }}
    <br>
    Status: {{ $fornecedor['status'] }}
    <br>
    CNPJ: {{ $fornecedor['cpf'] }}
    <br>
    Telefone: {{ $fornecedor['telefone'] }}
    <hr>
@endforeach
