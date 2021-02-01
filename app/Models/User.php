<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name', 
        'lastname',
        'photo', 
        'email', 
        'password', 
        'rol_id',
        'odine_id',
        'estado_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol() //O utilizador tem exatamente um único rol 
    {
        return $this->hasOne(Rol::class);        
    }

    public function odine() //O Utilizador está associado a um Odine
    {
        return $this->belongsTo(Odine::class);
    }

    public function estado() //O utilizador têm um estado 
    {
        return $this->hasOne(Estado::class);        
    }

    public static function setphoto($foto, $actual = false)
    {
        if ($foto) {
            if($actual){
                Storage::disk('public')->delete("upload/$actual");
            }
            $imagemName = Str::random(20).'.jpg';
            $imagen = Image::make($foto)->encode('jpg', 75);
            $imagen->resize(128, 128, function($constraint){
                $constraint->upsize();
            });
            Storage::disk('public')->put("upload/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
        
    }
        
}
