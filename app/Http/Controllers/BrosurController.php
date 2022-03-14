<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brosur;
use Hash,DB,Session,Validator,Auth, Str;

class BrosurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brosur.index')->with('brosur', Brosur::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brosur.create');
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
            'judul' => 'required|max:255|unique:brosurs',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/cover', $img_new);
            
            $pdf = $request->pdf;
            $pdf_new = time().$pdf->getClientOriginalName();
            $pdf->move('img/b_pdf', $pdf_new);

            $data = Brosur::create([
                'judul' => $request->judul,
                'img' => 'img/cover/' . $img_new,
                'pdf' => 'img/b_pdf/' . $pdf_new,
                'slug' => Str::slug($request->judul),
            ]);
            Session::flash('success','Session tambah berhasil');
            return redirect()->route('index.brosur');
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
        $data = Brosur::findOrFail($id);
        return view('admin.brosur.edit',compact('data'));
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
        $data = Brosur::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required|max:255',
        ]);
        if ($validator->fails()) {
            Session::flash('error', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/b_cover', $img_new);
                $data->img = 'img/b_cover/' . $img_new;
            }
            
            if ($request->hasFile('pdf')) {
                $pdf = $request->pdf;
                $pdf_new = time(). $pdf->getClientOriginalName();
                $pdf->move('img/b_pdf', $pdf_new);
                $data->pdf = 'img/b_pdf/' . $pdf_new;
            }
            $data->judul = $request->judul;
            $data->slug = Str::slug($request->judul);
            $data->save();
            Session::flash('success', 'Session update berhasil');
            return redirect()->route('index.brosur');
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
        $data = Brosur::findOrFail($id);
        $data->delete();
        Session::flash('success', 'Session hapus berhasil');
        return redirect()->back();
    }
}
