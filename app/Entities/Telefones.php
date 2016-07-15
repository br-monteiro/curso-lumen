<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    protected $table = 'telefones';
    protected $fillable = [
        'descricao', 'cod_pais', 'ddd', 'prefixo', 'sufixo'
    ];
}
