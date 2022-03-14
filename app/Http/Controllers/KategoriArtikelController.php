<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akategori;
use Validator;
use Session;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kategori_artikel.index')->with('akategori', Akategori::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'judul' => 'required|max:255|unique:akategoris',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $data = new Akategori;
            $data->judul = $request->judul;
            $data->slug = str_slug($request->judul);
            $data->save();

            Session::flash('success','Session tambah berhasil');
            return redirect()->route('ak.index');
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
        //
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
        $data = Akategori::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $data->judul = $request->judul;
            $data->slug = str_slug($request->judul);
            $data->save();
            Session::flash('success','Session update berhasil');
            return redirect()->route('ak.index');
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
