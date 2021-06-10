<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'Id';
    protected $fillable = ['Id','title','content','user_Id','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];

    public function user(){
        return $this->belongsTo('App\Models\User','user_Id','id');
    }
}
