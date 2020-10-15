<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Introorderproduct extends Model
{
    use HasFactory;
    protected $table='introorderproduct';
    public $timestamps = FALSE;
    protected $fillable = ['id','product_id','count','price'];
}
