<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name_product','id_type','price','content','status'];

    public function typeproduct()
   {
   	return $this->hasOne('App\Models\Typeproduct','id_type','id_type');
   }
  public function user()
  {
       return $this->belongsto('App\Models\User', 'user_id');
  }
   public function imageproduct()
   {
   	return $this->hasMany('App\Models\Imageproduct','id_product');
   }
    
}
