<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    public $table = 'alunos';

    public $fillable = [
        'nome',
        'cpf',
        'email',
        'data_nascimento',
        'telefone',
        'voucher_id',
        'curso_id',
        'curso_id_b',
        'status',
        'check'
    ];

    public static $rules = [
        'nome' => 'required'
    ];

    protected $casts = [
        'nome' => 'string',
        'cpf' => 'string',
        'email' => 'string',
        'data_nascimento' => 'datetime:Y-m-d',
        'telefone' => 'string',
        'voucher_id' => 'integer',
        'curso_id_b' => 'integer',
        'curso_id' => 'integer',
        'check' => 'integer',
        'status' => 'integer'
    ];
    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }    

    public function curso()
    {
        return $this->belongsTo('App\Models\Curso', 'curso_id', 'id');
    } 

    public function cursob()
    {
        return $this->belongsTo('App\Models\Curso', 'curso_id_b', 'id');
    } 

    public function divulgador()
    {
        return $this->voucher->divulgador->nome;
    } 

    protected static function booted()
    {
        static::created(function ($aluno) {
            $aluno->voucher()->update([
                'utilizado_at' => now(),
                'status' => 0
            ]);
        });
    }
}
