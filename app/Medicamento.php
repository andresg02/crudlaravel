<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    //
    protected $fillable = ['nombre', 'descripcion', 'cantidad','fechav','laboratorio','precio'];
}
