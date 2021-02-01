<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Caea extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'codigoCAEA',
        'designacao',
        'descricao',
    ];

    /*
    public function actividade() 
    {
        return $this->belongsTo(Actividade::class);
    }

    public function custo() 
    {
        return $this->belongsTo(Custo::class);
    }

    public function difusao() 
    {
        return $this->belongsTo(Difusao::class);
    }
    */
}
