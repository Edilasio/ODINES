<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Odine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',        
        'logotipo',
        'designacao',
        'sigla',
        'email',
        'telefone',
        'pessoa_contacto',
        'descricao',
        'estado_id',
    ];

    public function utilizador() //Odine tem um ou muitos utilizadores
    {
        return $this->hasMany(User::class);
    }

    public function estado() //Odine tem um estado 
    {
        return $this->hasOne(Estado::class);        
    }

    public function publicado() //Odine tem muitas publicacões 
    {
        return $this->morphToMany(Publicado::class, 'publicado');
    }

    public static function getId($request)
    {                
        $query = DB::table('odines')->where('sigla', $request)->select('id')->first();        
        return $query->id;
    }
}
