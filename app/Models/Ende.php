<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ende extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'codigoENDE',
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
    */
}
