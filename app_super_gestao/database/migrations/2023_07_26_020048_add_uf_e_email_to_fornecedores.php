<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUfEEmailToFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2)->after('nome');
            $table->string('email', 150)->after('nome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function (Blueprint $table) {
            //Forma individual
            $table->dropColumn('uf', 'email'); 

            //Forma unitária
            // $table->dropColumn('uf');
            // $table->dropColumn('email');
        });
    }
}
