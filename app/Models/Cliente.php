<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'cliente',
        'cpf',
        'dataNascimento',
        'estado',
        'cidade',
        'sexo',
        'created_at',
        'updated_at'
    ];
}
