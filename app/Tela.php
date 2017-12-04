<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tela extends Model
{
    protected $table = 'telas';

    protected $fillable = [
        'id', 'nombre'
    ];
}
