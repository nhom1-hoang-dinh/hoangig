<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sizeproduct extends Model
{
    use HasFactory;
    protected $table='sizeproduct';
    public $timestamps = FALSE;
    protected $fillable = ['id','name'];
}
