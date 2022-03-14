<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Hash,DB,Session,Validator,Auth, Str;
class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $brands = Brand::orderBy('id','ASC')->simplePaginate(10);
        return view('admin.brands.index')->with('brands', Brand::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
            'judul' => 'required|max:255|unique:brands',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{

            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/brands', $img_new);

            $data = Brand::create([
                'judul' => $request->judul,
                // 'content' => 'aws',
                'img' => 'img/brands/' . $img_new,
                'slug' => Str::slug($request->judul),
            ]);
            Session::flash('success','Session tambah berhasil');
            return redirect()->route('brands.index');
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
        $data = Brand::find($id);
        return view('admin.brands.edit', compact('data'));
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
        $data = Brand::find($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/brands', $img_new);
                $data->img = 'img/brands/' . $img_new;
            }   
            $data->judul = $request->judul;
            $data->slug = Str::slug($request->judul);
            $data->save();
            Session::flash('success','Session update berhasil');
            return redirect()->route('brands.index');
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
        $data = Brand::find($id);
        $data->delete();
        Session::flash('success','Session hapus berhasil');
        return redirect()->back();
    }
}
