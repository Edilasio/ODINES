<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Difusao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designacao',
        'entidade',        
        'periodo_referencia',
        'periodicidade',
        'data_colocacao',
        'data_disp_papel',
        'custo_impressao',
        'descricao',
        'investigacao_id',
        'publicacao_id',
        'caea_id',        
    ];

    public function investigacao() 
    {
        return $this->belongsTo(Investigacao::class);
    }
    /*
    public function publicacao() 
    {
        return $this->hasOne(Publicacao::class);
    }

    public function caea() 
    {
        return $this->hasOne(Caea::class);
    }
    */
}
