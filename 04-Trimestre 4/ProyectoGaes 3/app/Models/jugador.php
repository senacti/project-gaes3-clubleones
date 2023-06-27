<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
    protected $primaryKey = 'id_jugador';
    protected $table = 'jugador';
    public $timestamps = false;
}
