<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partido extends Model
{
    protected $primaryKey = 'id_partido';
    protected $table = 'partido';
    public $timestamps = false;
}
