<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SearchController extends Controller
{
    // public function index(Request $request){
    // 	if($request->has('titlesearch')){
    // 		$items = Product::search($request->titlesearch)
    // 			->paginate(6);

    // 	}else{

    // 		$items = Product::paginate(6);

    // 	}
    // 	return view('client.contact',compact('items'));
	// }
	public function search(Request $request){
		$query = $request->get('result');
		return view('client.result', compact('query'));
	}
}
