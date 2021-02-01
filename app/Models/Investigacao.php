<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Investigacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',        
        'designacao',
        'datacriacao',
        'dataenvio',
        'descricao',
    ];

    public function estado() //A investigação esta associada a um odine
    {
        return $this->hasOne(Estado::class);        
    }

    public function publicado() //A investigação tem muitas publicações
    {
        return $this->morphToMany(Publicado::class, 'publicado');
    }

    public function custo() //A investigação está relacionada com o Quadro de Custo
    {
        return $this->hasMany(Custo::class);
    }

    public function actividades() //A investigação está relacionada com o Quadro de Actividade
    {
        return $this->hasMany(Actividade::class);
    }

    public function difusao() //A investigação está relacionada com o Quadro de Difusão
    {
        return $this->hasMany(Difusao::class);
    }

    public static function getId($request)
    {   
        $query = DB::table('investigacaos')->where('designacao', $request)->select('id')->first();        
        return $query->id;
    }
}
