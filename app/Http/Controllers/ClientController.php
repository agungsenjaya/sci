<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Kategori;
use App\Akategori;
use App\Brand;
use App\Artikel;
use App\Slider;
use App\Brosur;
use DB;
use Mail;
use Carbon;
use Session;
use Newsletter;
class ClientController extends Controller
{
    public function index()
    {
    	return view('client.index')->with('slider', Slider::all())->with('produk', Product::all())->with('artikel', Artikel::all()->reverse());
    }
    public function about()
    {
    	return view('client.about');
    }
    public function privacy()
    {
    	return view('client.privacy');
    }
    public function market()
    {
        return view('client.market');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function products()
    {
        return view('client.products')->with('kategori', Kategori::all())->with('brands', Brand::all())->with('slide', Slider::all());
    }
    public function kview($a)
    {
        $data= Kategori::where('slug', $a)->firstOrFail();
        return view('client.k-view', compact('data'))->with('products', Product::all())->with('kategori', Kategori::all())->with('brands', Brand::all());
    }
    public function bview($s)
    {
        $data= Brand::where('slug', $s)->firstOrFail();
        return view('client.b-view', compact('data'))->with('products', Product::all())->with('kategori', Kategori::all())->with('brands', Brand::all());
    }
    public function pview($a)
    {
        $data= Product::where('slug', $a)->firstOrFail();
        return view('client.p-view', compact('data'))->with('kategori', Kategori::all())->with('brands', Brand::all());
    }
    public function blog()
    {
        $artikels = DB::table('artikels')->orderBy('created_at', 'desc')->paginate(6);
        return view('client.blog',['artikels' => $artikels])->with('blog', Artikel::all())->with('akategori', Akategori::all());
    }
    public function blog_view($slug)
    {
        $data = Artikel::where('slug', $slug)->firstOrFail();
        return view('client.blog_view',compact('data'))->with('akategori', Akategori::all())->with('artikel', Artikel::all()->reverse());
    }
    public function calculator()
    {
        return view('client.calculator');
    }
    public function newsletter(Request $request)
    {
        if ( !Newsletter::isSubscribed($request->email)) 
        {
            Newsletter::subscribe($request->email);
            Session::flash('s','..');
            return redirect()->back();
        }else {
            Session::flash('s','..');
            return redirect()->back();
        }
    }
    public function brosur(){
        return view('client.brosur')->with('brosur', Brosur::paginate(6))->with('brosurs', Brosur::all());
    }
    public function datateknis(){
        // return view('client.datateknis')->with('products', Product::paginate(7))->with('teknis', Product::all());
        $no = 1;
        return view('client.datateknis', compact('no'))->with('teknis', Product::all())->with('brands', Brand::all());
    }
    public function service(){
        return view('client.service');
    }
    public function mobileview_blog($slug){
     $data = Artikel::where('slug', $slug)->firstOrFail();
     return view('client.mobileview_blog',compact('data'))->with('akategori', Akategori::all())->with('artikel', Artikel::all());
     }
}
