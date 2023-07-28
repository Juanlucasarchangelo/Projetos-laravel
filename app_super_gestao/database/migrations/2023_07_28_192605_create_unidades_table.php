<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 50);
            $table->timestamps();
        });

        // Adicionar o orelacionameto com a tablema produtos
        Schema::table('produtos', function( Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        // Adicionar o relacionamento na tabela produtos_detalhes
        Schema::table('produto_detalhes', function( Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

     // Remover o relacionamento com a tablema produtos
     Schema::table('produto_detalhes', function( Blueprint $table){
        // Remover a FK
        $table->dropForeign('produto_detalhes_unidade_id_foreign'); // ------------------------------------>>>>
        // Remover a coluna
        $table->dropColumn('unidade_id');
    });

    // Remover o relacionamento com a tablema produtos
    Schema::table('produtos', function( Blueprint $table){
        // Remover a FK
        $table->dropForeign('produtos_unidade_id_foreign'); // ------------------------------------>>>>
        // Remover a coluna
        $table->dropColumn('unidade_id');
    });

     // Remover
        Schema::dropIfExists('unidades');
    }
}
