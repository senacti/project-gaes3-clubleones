<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrenamiento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_entrenamiento';
    protected $table = 'entrenamiento';
    public $timestamps = false;
}