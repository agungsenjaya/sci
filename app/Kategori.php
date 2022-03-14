<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['judul','img','content','penggunaan','slug'];
    
    public function getImgAttribute($img)
    {
    	return asset($img);
    }
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
}
