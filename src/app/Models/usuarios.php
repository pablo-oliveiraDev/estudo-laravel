<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = array(
        'id',
        'nome',
        'sobrenome',
        'email',
        'cpf',
        'senha'
    );
}
