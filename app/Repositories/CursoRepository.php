<?php

namespace App\Repositories;

use App\Models\Curso;
use App\Repositories\BaseRepository;

class CursoRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nome',
        'status'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Curso::class;
    }
}
