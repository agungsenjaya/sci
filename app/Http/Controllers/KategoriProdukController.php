<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Session;
use Validator;

class KategoriProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kategori = Kategori::orderBy('id','ASC')->simplePaginate(10);
        $kategori = Kategori::all();
        return view('admin.kategori_products.index',compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  View('admin.kategori_products.create');
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
            'judul' => 'required|max:255|unique:kategoris',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/kategori', $img_new);

            $data = Kategori::create([
                'judul' => $request->judul,
                'img' => 'img/kategori/' . $img_new,
                'content' => $request->content,
                'penggunaan' => 'aws',
                'slug' => str_slug($request->judul),
            ]);
            Session::flash('success','Session tambah berhasil');
            return redirect()->route('kategori.index');
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
        $data = Kategori::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('admin.kategori_products.edit', compact('data'));
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
        $data = Kategori::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/kategori', $img_new);
                $data->img = 'img/kategori/' . $img_new;
            }
            $data->judul = $request->judul;
            $data->content = $request->content;
            $data->slug = str_slug($request->judul);
            $data->save();
            Session::flash('success','Session update berhasil');
            return redirect()->back();
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
        //
    }
}
