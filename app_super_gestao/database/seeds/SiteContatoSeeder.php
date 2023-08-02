<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato();
        // $contato->nome = 'Alex';
        // $contato->telefone = '4651651651516';
        // $contato->email = 'jl@jl.com';
        // $contato->motivo_contato = '1';
        // $contato->mensagem = 'Olá mundo!';
        // $contato->save();

        factory(SiteContato::class, 100)->create();
    }
}
