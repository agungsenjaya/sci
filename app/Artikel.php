<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Akategori;

class Artikel extends Model
{

    protected $fillable = ['judul','content','akategori_id','img','slug'];
    public function getImgAttribute($img)
    {
    	return asset($img);
    }

    public function akategori()
    {
    	return $this->belongsTo('App\Akategori');
    }
    // Algolia
    // public function searchableAs()
    // {
    //     return 'artikel';
    // }

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return array(
            'id' => $array['id'],
            'judul' => $array['judul'],
            'kategori' => call_user_func(function() use ($array) {
                    $data = Akategori::find($array['akategori_id']);
                return $data->judul;
            }),
            'slug' => $array['slug'],
    );
    }
    
}
