<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akategori extends Model
{
    protected $fillable = ['judul','slug'];

    public function artikels()
    {
    	return $this->hasMany('App\Artikel');
    }
}
