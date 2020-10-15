<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countsize extends Model
{
    use HasFactory;
    protected $table='countsize';
    public $timestamps = FALSE;
    protected $fillable = ['id','sizeproduct_id','product_id','count'];
}
