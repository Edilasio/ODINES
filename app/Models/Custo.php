<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Custo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designacao',
        'dc_custo_fisico',
        'ts_custo_fisico',
        't_custo_fisico',
        'tm_custo_fisico',
        'ad_outro_custo_fisico',
        'dc_custo_financeiro',
        'ts_custo_financeiro',
        't_custo_financeiro',
        'tm_custo_financeiro',
        'ad_outro_custo_financeiro',
        'outro_custo_financeiro_directo',
        'outro_custo_financeiro_ind',
        'investigacao_id',
        'caea_id',
        'ende_id',
    ];

    public function investigacao() 
    {
        return $this->belongsTo(Investigacao::class);
    }
    /*
    public function caea() 
    {
        return $this->hasOne(Caea::class);
    }

    public function ende() 
    {
        return $this->hasOne(Ende::class);
    }
    */
}
