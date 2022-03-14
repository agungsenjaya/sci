<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Brand extends Model
{
    use Searchable;

    protected $fillable = ['judul','img','slug'];
    public function getImgAttribute($img)
    {
    	return asset($img);
    }
    public function getCatalogAttribute($catalog)
    {
    	return asset($catalog);
    }
    public function products()
    {
    	return $this->hasMany('App\Product');
    }
    // Algolia
    // public function searchableAs()
    // {
    //     return 'brand';
    // }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return array(
            'id' => $array['id'],
            'judul' => $array['judul'],
            'slug' => $array['slug'],
    );
    }
}
