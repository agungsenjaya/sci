<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Kategori;
use Datatables;
use Hash,DB,Session,Validator,Auth, Str;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index')->with('brand', Brand::all())->with('kategori',Kategori::all())->with('products',Product::all());
    }
    public  function p()
    {
        $p = Product::all();
        return Datatables::of($p)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with('brand', Brand::all())->with('kategori', Kategori::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255|unique:products',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            // dd($request->all());
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/products', $img_new);
            
            $pdf = $request->pdf;
            $pdf_new = time().$pdf->getClientOriginalName();
            $pdf->move('img/pdf', $pdf_new);

            $data = Product::create([
                'judul' => $request->judul,
                'brand_id' => $request->brand_id,
                'kategori_id' => $request->kategori_id,
                'img' => 'img/products/' . $img_new,
                'pdf' => 'img/pdf/' . $pdf_new,
                'content' => $request->content,
                'slug' => Str::slug($request->judul),
            ]);
            if ($data) {
                Session::flash('success','Session tambah berhasil');
                return redirect()->route('products.index');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('admin.products.edit', compact('data'))->with('brand', Brand::all())->with('kategori', Kategori::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/products', $img_new);
                $data->img = 'img/products/' . $img_new;
            }
            
            if ($request->hasFile('pdf')) {
                $pdf = $request->pdf;
                $pdf_new = time(). $pdf->getClientOriginalName();
                $pdf->move('img/pdf', $pdf_new);
                $data->pdf = 'img/pdf/' . $pdf_new;
            }
        $data->judul = $request->judul;
        $data->brand_id = $request->brand_id;
        $data->kategori_id = $request->kategori_id;
        $data->content = $request->content;
        $data->slug = Str::slug($request->judul);
        $data->save();
        Session::flash('success', 'Session update berhasil');
        return redirect()->route('products.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        Session::flash('success', 'Session hapus berhasil');
        return redirect()->back();
    }
}
