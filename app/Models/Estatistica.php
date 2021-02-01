<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estatistica extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'designacao',
        'descricao',
    ];
    /*
    public function actividade() 
    {
        return $this->belongsTo(Actividade::class);
    }
    */
}
