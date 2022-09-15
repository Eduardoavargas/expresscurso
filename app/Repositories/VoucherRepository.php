<?php

namespace App\Repositories;

use App\Models\Voucher;
use App\Repositories\BaseRepository;

class VoucherRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'divulgador',
        'status',
        'utilizado_at',
        'uuid'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Voucher::class;
    }
}
