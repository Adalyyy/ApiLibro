<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $connection = 'mongodb'; 
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio_publicacion'
    ];
    
}
