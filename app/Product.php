<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Brand;
use App\Kategori;

class Product extends Model
{
    use Searchable;
    //
    protected $fillable = ['judul','content','brand_id','kategori_id','img','slug','pdf'];
    
    public function getImgAttribute($img)
    {
    	return asset($img);
    }
    // public function getPdfAttribute($pdf)
    // {
    // 	return asset($pdf);
    // }
    public function brand()
    {
    	return $this->belongsTo('App\Brand');
    }
    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }

    // Algolia
    // public function searchableAs()
    // {
    //     return 'produk';
    // }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return array(
            'id' => $array['id'],
            'judul' => $array['judul'],
            'content' => $array['content'],
            'kategori' => call_user_func(function() use ($array) {
                    $data = Kategori::find($array['kategori_id']);
                return $data->judul;
            }),
            'brand' => call_user_func(function() use ($array) {
                    $data = Brand::find($array['brand_id']);
                return $data->judul;
            }),
            'slug' => $array['slug'],
    );
    }
}
