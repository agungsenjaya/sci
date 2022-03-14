<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Response;
class AjaxProduk extends Controller
{
    public function index()
    {
    	return Product::all();
    }
    public function show($id)
    {
        return Product::find($id);
    }
}
