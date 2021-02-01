<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Publicado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',        
        'odine_id',
        'investigacao_id',
    ];

    public function odine()
    {
        return $this->morphedByMany(Odine::class, 'publicado');
    }

    public function investigacao()
    {
        return $this->morphedByMany(Investigacao::class, 'publicado');
    }
}
