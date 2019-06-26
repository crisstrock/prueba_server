<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programmer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'perfil', 'lan_favorito','git_address'
    ];
}
