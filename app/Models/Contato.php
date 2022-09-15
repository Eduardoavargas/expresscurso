<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public $table = 'contatos';

    public $fillable = [
        'nome',
        'telefone',
        'email',
        'mensagem'
    ];

    protected $casts = [
        'nome' => 'string',
        'telefone' => 'string',
        'email' => 'string',
        'mensagem' => 'string'
    ];

    public static $rules = [
        'nome' => 'required',
        'telefone' => 'required',
        'email' => 'required',
        'mensagem' => 'required'
        
    ];

    
}
