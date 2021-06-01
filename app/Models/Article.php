<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['Id','title','content','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
}
