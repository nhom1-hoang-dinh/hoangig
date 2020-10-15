<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    protected $fillable = ['id','name','content','typepost_id','user_id','avatar'];
}
