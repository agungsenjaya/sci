<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Product;
use App\Brand;
use App\Kategori;
use App\Akategori;
use App\Artikel;
use App\Brosur;
use App\Slider;

class ApiController extends Controller
{

    public function products(){
        return Product::all();
        // $currentUser = JWTAuth::parseToken()->authenticate();
        // return $currentUser
        // ->products()
        // ->orderBy('created_at', 'DESC')
        // ->get()
        // ->toArray();
    }
    public function productShow($id)
    {
        $data = Product::find($id);
        return $data;
    }
    public function productShowSlug($slug){
        $data= Product::where('slug', $slug)->firstOrFail();
        return $data;
    }
    public function brands(){
        return Brand::all();
    }
    public function kategoris(){
        return Kategori::all();
    }
    public function articles(){
        return Artikel::all();
    }
    public function akategoris(){
        return Akategori::all();
    }
    public function brosurs(){
        return Brosur::all();
    }
    public function sliders(){
        return Slider::all();
    }
}
