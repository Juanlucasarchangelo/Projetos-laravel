@extends('site.layouts.basico')

@section('titulo', 'Contato')

@section('conteudo')

    @include('site.layouts._partials.topo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>
        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._componentes.form_contato')
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.layouts._partials.footer')

@endsection
