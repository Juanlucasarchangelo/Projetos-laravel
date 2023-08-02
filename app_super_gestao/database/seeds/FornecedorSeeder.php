<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'teste.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'jl@jl.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'tete200.com',
            'uf' => 'BH',
            'email' => 'jl200@jl.com'
        ]);

        // // Insert (Erro no DB)
        // DB::table('fornecedores')->insert([
        //     'nome' => 'Fornecedor 300',
        //     'site' => 'tete300.com',
        //     'uf' => 'PA',
        //     'email' => 'jl300@jl.com'
        // ]);
    }
}
