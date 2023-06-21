<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class planacondicionamiento extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_planacondicionamiento';
    protected $table = 'planacondicionamiento';
    public $timestamps = false;
}