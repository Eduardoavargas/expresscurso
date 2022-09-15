<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divulgador extends Model
{
    use HasFactory;
    public $table = 'divulgadors';

    public $fillable = [
        'nome',
        'status'
    ];

    protected $casts = [
        'nome' => 'string',
        'status' => 'integer'
    ];

    public static $rules = [
        'nome' => 'required'
    ];

    public function alunos()
    {
        return $this->vouchers->aluno;
    }

    public function vouchers ()
    {
        return $this->hasMany('App\Models\Voucher');
    }

    
}
