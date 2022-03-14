<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Product;
use App\Brand;
use App\Artikel;
use App\Akategori;
class SitemapController extends Controller
{
    public function index()
    {
      $post = Product::orderBy('updated_at', 'DESC')->first();
	  $kategori = Kategori::orderBy('updated_at', 'DESC')->first();
	  $brands = Brand::orderBy('updated_at', 'DESC')->first();

	  $artikel = Artikel::orderBy('updated_at', 'DESC')->first();
	  $akategori = Akategori::orderBy('updated_at', 'DESC')->first();

	  return response()->view('sitemap.index', [
	    'post' => $post,
	    'brands' => $brands,
	    'kategori' => $kategori,
	    'artikel' => $artikel,
	    'akategori' => $akategori,
	  ])->header('Content-Type', 'text/xml');
	}
	public function products()
	{
	  $posts = Product::all();
	  return response()->view('sitemap.products', [
	    'posts' => $posts,
	  ])->header('Content-Type', 'text/xml');
	}

	public function categories()
	{
	  $categories = Kategori::all();
	  return response()->view('sitemap.kategori', [
	    'categories' => $categories,
	  ])->header('Content-Type', 'text/xml');
	}
	
	public function brands()
	{
	  $brands = Brand::all();
	  return response()->view('sitemap.brands', [
	    'brands' => $brands,
	  ])->header('Content-Type', 'text/xml');
	}

	public function artikel()
	{
		$artikel = Artikel::all();
		return response()->view('sitemap.artikel', [
	    'artikel' => $artikel,
	  ])->header('Content-Type', 'text/xml');
	}
	public function gambar(){
		$gambar = \File::allFiles(public_path('img/seo/'));
		return response()->view('sitemap.gambar', [
			'gambar' => $gambar,
		  ])->header('Content-Type', 'text/xml');
	}
}
