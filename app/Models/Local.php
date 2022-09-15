<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public $table = 'locals';

    public $fillable = [
        'cidade',
        'local',
        'endereco',
        'telefone',
        'valor',
        'data_atendimento',
        'observacao',
        'divulgador',
        'projeto'
    ];

    protected $casts = [
        'cidade' => 'string',
        'local' => 'string',
        'endereco' => 'string',
        'telefone' => 'string',
        'valor' => 'string',
        'data_atendimento' => 'string',
        'observacao' => 'string',
        'divulgador' => 'string',
        'projeto' => 'string'
    ];

    public static $rules = [
       
    ];

    
}
