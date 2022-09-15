<?php

namespace App\Repositories;

use App\Models\Local;
use App\Repositories\BaseRepository;

class LocalRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Local::class;
    }
}
