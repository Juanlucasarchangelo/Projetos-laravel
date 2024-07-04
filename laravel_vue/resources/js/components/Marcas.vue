<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Busca de Marcas</div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="inputId" id-help="idHelp" texto-ajuda="Informe o ID da marca.">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="Id da marca">
                                </input-container-component>
                            </div>
                            <div class="col mb-3">
                                <input-container-component titulo="Nome da Marca" id="inputNome" id-help="nomeHelp" texto-ajuda="Informe o Nome da marca.">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Id da marca">
                                </input-container-component>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
</script>