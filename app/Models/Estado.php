<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estado extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',        
        'designacao',
        'descricao',
    ];

    public function utilizador() 
    {
        return $this->belongsTo(User::class);
    }

    public function odine() 
    {
        return $this->belongsTo(Odine::class);
    }

    public function investigacao() 
    {
        return $this->belongsTo(Investigacao::class);
    }

    public static function getId($request)
    {        
        $query = DB::table('estados')->where('designacao', $request)->select('id')->first();
        return $query->id;
    }

    public static function getEstado($id)
    {        
        $query = DB::table('estados')->where('id', $id)->select('designacao')->first();
        return $query->designacao;
    }
}
