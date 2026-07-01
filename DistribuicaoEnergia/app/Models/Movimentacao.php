<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    protected $table = 'movimentacoes';

    protected $fillable = [
        'data',
        'tipo',
        'produto',
        'quantidade',
        'descricao',
        'usuario'
    ];

    public $timestamps = false;
}