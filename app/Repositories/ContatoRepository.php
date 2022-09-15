<?php

namespace App\Repositories;

use App\Models\Contato;
use App\Repositories\BaseRepository;

class ContatoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nome',
        'telefone',
        'email',
        'mensagem'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Contato::class;
    }

    public function getContatos()
    {
        return $this->model->get();
    }

    public function getCountContatoCadastrado()
    {
        return $this->model->get()->count();
    }
}
