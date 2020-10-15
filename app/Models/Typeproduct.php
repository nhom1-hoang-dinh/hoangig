<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typeproduct extends Model
{
    use HasFactory;
    protected $table='typeproduct';
    public $timestamps = FALSE;
    protected $primaryKey = 'id_type';
    protected $fillable = ['id_type','name_type'];

     public function product()
    {
        return $this->belongsTo('App\Models\Product','id_type','id_type');
    }
}
