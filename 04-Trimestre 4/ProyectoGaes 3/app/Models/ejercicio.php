<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ejercicio extends Model
{
    protected $primaryKey = 'id_ejercicio';
    protected $table = 'ejercicio';
    public $timestamps = false;
}
