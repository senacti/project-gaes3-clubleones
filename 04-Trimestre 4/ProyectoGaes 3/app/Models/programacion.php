<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programacion extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_programacion';
    protected $table = 'programacion';
    public $timestamps = false;
}
