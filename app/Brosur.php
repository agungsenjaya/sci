<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    protected $fillable = ['judul','img','pdf','slug'];
    
    public function getImgAttribute($img){
        return asset($img);
    }
}
