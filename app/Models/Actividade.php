<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Actividade extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designacao',
        'entidade',
        'unidade_observada',
        'variavel_observada',
        'periodo_referencia',
        'periodicidade',
        'unidade_observacao',
        'nivel_desag_geografica',
        'data_disp_publico',
        'descricao',
        'investigacao_id',
        'estatistica_id',
        'caea_id',
        'justificacao_id',
        'ende_id',
    ];

    public function investigacao() 
    {
        return $this->belongsTo(Investigacao::class);
    }
    /*
    public function tipoEstatistica() 
    {
        return $this->hasOne(Estatistica::class);
    }

    public function justificacao() 
    {
        return $this->hasOne(Justificacao::class);
    }

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
