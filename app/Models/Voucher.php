<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    public $table = 'vouchers';

    public $fillable = [
        'divulgador_id',
        'status',
        'utilizado_at',
        'uuid'
    ];

    protected $casts = [
        'divulgador_id' => 'integer',
        'status' => 'integer',
        'utilizado_at' => 'date',
        'uuid' => 'string'
    ];

    public static $rules = [
        
    ];

    public function divulgador()
    {
        return $this->belongsTo('App\Models\Divulgador');
    }

    public function aluno()
    {
        return $this->hasOne('App\Models\Aluno');
    }

    
}
