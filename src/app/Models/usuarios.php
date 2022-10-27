<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'usuarios';
    
    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'email',
        'cpf',
        'senha'
    ];
}
