<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    // use HasFactory;
    protected $primaryKey = 'id_campeonato';
    protected $table = 'campeonatos';
    public $timestamps = false;
}
