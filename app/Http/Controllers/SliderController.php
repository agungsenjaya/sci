<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Hash,DB,Session,Validator,Auth, Str;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index')->with('slider', Slider::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'judul' => 'required',
            'img' => 'required',
            'img_mobile' => 'required',
            'link' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/sliders', $img_new);
            
            $img_2 = $request->img_mobile;
            $img_new_2 = time().$img_2->getClientOriginalName();
            $img_2->move('img/sliders', $img_new_2);
            
            $data = Slider::create([
                'judul'  => $request->judul,
                'img' => 'img/sliders/' . $img_new,
                'img_mobile' => 'img/sliders/' . $img_new_2,
                'link'  => $request->link,
                'slug'  => Str::slug($request->judul)
            ]);
            Session::flash('success','Session tambah berhasil');
            return redirect()->route('index.slider');
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
        $data = Slider::find($id);
        return view('admin.slider.edit',compact('data'));
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
        $data = Slider::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'status' => 'required',
            'link' => 'required',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{

            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/sliders', $img_new);
                $data->img = 'img/sliders/' . $img_new;
            }
            
            if ($request->hasFile('img_mobile')) {
                $img = $request->img_mobile;
                $img_new = time(). $img->getClientOriginalName();
                $img->move('img/sliders', $img_new);
                $data->img_mobile = 'img/sliders/' . $img_new;
            }
        $data->judul =  $request->judul;
        $data->status =  $request->status;
        $data->link =  $request->link;
        $data->slug =  Str::slug($request->judul);
        $data->save();
        Session::flash('success', 'Session update berhasil');
        return redirect()->route('index.slider');

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
        // $data = Slider::findOrFail('id', $id)->get();
        $data = Slider::find($id);
        $data->delete();
        Session::flash('delete', 'Session hapus berhasil');
        return redirect()->route('index.slider');
    }
}
