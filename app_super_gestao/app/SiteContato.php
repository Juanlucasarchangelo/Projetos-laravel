<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'motivo_contato', 'mensagem'];
}
