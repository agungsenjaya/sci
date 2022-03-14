<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['judul','img','img_mobile','status','link','slug'];
    
    public function getImgAttribute($img)
    {
    	return asset($img);
    }
    
}
