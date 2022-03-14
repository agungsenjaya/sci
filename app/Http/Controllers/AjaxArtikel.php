<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;
use Response;
class AjaxArtikel extends Controller
{
    public function index(){
    	return Artikel::all();
    }
    public function show($id)
    {
        return Artikel::find($id);
    }
}
