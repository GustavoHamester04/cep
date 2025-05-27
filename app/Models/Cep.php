<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cep extends Model
{
    protected $table = 'CEP';

    protected $fillable = [
        'CEP',
        'Logradouro',
        'Bairro',
        'Cidade',
        'Estado',
    ];

    public $timestamps = false;
}
