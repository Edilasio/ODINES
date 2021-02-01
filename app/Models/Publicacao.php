<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Publicacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',        
        'designacao',
        'descricao',
    ];
    /*
    public function difusao() 
    {
        return $this->belongsTo(Difusao::class);
    }
    */
}
