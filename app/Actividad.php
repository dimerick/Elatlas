<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividad';
    public $timestamps = true;
    public $primaryKey = 'id';
    protected $fillable = ['grupo', 'titulo', 'fecha', 'descripcion', 'latitud', 'longitud', 'confirmada'];
}
