<?php

namespace App\Repositories;

use App\Models\Aluno;
use App\Repositories\BaseRepository;

class AlunoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nome',
        'cpf',
        'email',
        'data_nascimento',
        'telefone',
        'voucher_id',
        'curso_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Aluno::class;
    }

    public function getAlunosAguardando()
    {
        return $this->model->where('check', '=', '0')->get();
    }

    public function getCountAlunosAguardando()
    {
        return $this->model->where('check', '=', '0')->count();
    }

    public function getCountCadastradoMes()
    {
        return $this->model->where('check', '=', '1')->whereMonth('updated_at', '=', date('m'))->count();
    }

    public function getCountCadastrado()
    {
        return $this->model->where('check', '=', '1')->count();
    }
}
