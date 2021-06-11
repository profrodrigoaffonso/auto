<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comandos extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'comando', 'executado'];
}
