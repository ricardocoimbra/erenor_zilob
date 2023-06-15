<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    //protected $fillable = ['cns', 'name', 'dt_nascimento', 'rg', 'cpf', 'telefone', 'cep', 'logradouro', 'bairro',
    // 'numero', 'complemento', 'profissao'];


    protected $fillable = ['cns', 'name', 'dt_nascimento', 'rg', 'cpf', 'telefone', 'cep', 'logradouro', 'bairro',
        'numero', 'complemento'];

}
