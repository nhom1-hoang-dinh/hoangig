<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageproduct extends Model
{
    use HasFactory;
    protected $table='imageproduct';
    public $timestamps = FALSE;
    protected $fillable = ['id_image','name_image','id_product','avatar'];

    public function product()
    {
    	return $this->belongsto('App\Models\Product','id_product');
    }
}
