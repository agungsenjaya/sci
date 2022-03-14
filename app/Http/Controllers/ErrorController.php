<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Brand;
class ErrorController extends Controller
{
    public function notfound()
    {
    	return view('errors.404')->with('kategori', Kategori::all())->with('brands', Brand::all());
    }
    public function fatal()
    {
    	return view('errors.500')->with('kategori', Kategori::all())->with('brands', Brand::all());
    }
}
