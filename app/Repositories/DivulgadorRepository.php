<?php

namespace App\Repositories;

use App\Models\Divulgador;
use App\Repositories\BaseRepository;

class DivulgadorRepository extends BaseRepository
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
        return Divulgador::class;
    }

    public function vouchersMes () 
    {
        $divuldadores = $this->model->all();
        $vouchers = [];
        foreach ($divuldadores as $divuldador) {
            $vouchers[$divuldador->name] = $divuldador->vouchers->where('created_at', '>=', date('Y-m-01'))->count();
        }
        return $vouchers;
    }

    public function vouchersSemana () 
    {
        $divuldadores = $this->model->all();
        $vouchers = [];
        foreach ($divuldadores as $divuldador) {
            $vouchers[$divuldador->name] = $divuldador->vouchers->where('created_at', '>=', date('Y-m-d', strtotime('-7 days')))->count();
        }
        return $vouchers;
    }

    public function vouchersDashboard ()
    {
        $divuldadores = $this->model->all();
        $vouchers = [];
        foreach ($divuldadores as $divuldador) {
            $vouchers[$divuldador->nome]['t'] = $divuldador->vouchers->count();
            $vouchers[$divuldador->nome]['tu'] = $divuldador->vouchers->whereNotNull('utilizado_at')->count();
            $vouchers[$divuldador->nome]['s'] = $divuldador->vouchers->where('utilizado_at', '>=', date('Y-m-d', strtotime('-7 days')))->count();
            $vouchers[$divuldador->nome]['m'] = $divuldador->vouchers->where('utilizado_at', '>=', date('Y-m-01'))->count();
        }
        arsort($vouchers);
        return $vouchers;

    }
}
