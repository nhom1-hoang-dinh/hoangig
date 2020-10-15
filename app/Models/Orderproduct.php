<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderproduct extends Model
{use HasFactory;
    protected $table='orderproduct';
    protected $fillable = ['id','user_id','admin_id','status', 'sale'];
}
