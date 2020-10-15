<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typepost extends Model
{
    protected $table='typepost';
    public $timestamps = FALSE;
    protected $fillable = ['id','name'];
}
