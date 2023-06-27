<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected $primaryKey = 'id_equipo';
    protected $table = 'equipo';
    public $timestamps = false;
}
