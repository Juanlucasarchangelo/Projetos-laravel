<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    // Incorporando a traits soft delete (Metodo de remoção suave)
    use SoftDeletes;

    // Quando o laravel não encontra a tablea, tem que definir ela assim
    protected $table = 'fornecedores';

    // Permite que o metodo estatico CREATE crie informações nestes campos (Usando o tinker ou metodo statico)
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
