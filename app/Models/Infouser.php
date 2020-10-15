<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infouser extends Model
{
   protected $table='infouser';
    public $timestamps = FALSE;
    protected $fillable = ['id','user_id','address','phone','note'];
}
