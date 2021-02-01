<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'id',       
        'designacao',
        'descricao',
    ];

    public function user() //O Rol está associado a um utilizador
    {
        return $this->belongsTo(User::class);
    }

    public static function getId($request)
    {        
        $query = DB::table('rols')->where('designacao', $request)->select('id')->first();
        return $query->id;
    }
}
