<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'imagem',
    ];

    public $timestamps = false;   //
}