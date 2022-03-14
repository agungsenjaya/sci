<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Akategori;
use Illuminate\Http\Request;
use Hash,DB,Session,Validator,Auth, Str;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.artikel.index')->with('akategori', Akategori::all())->with('artikel',Artikel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.create')->with('akategori', Akategori::all());
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
            'judul' => 'required|max:255|unique:artikels',
        ]);
        if ($validator->fails()) {
            Session::flash('failed', 'Gagal, coba periksa kembali');
            return redirect()->back();
        }else{
            $img = $request->img;
            $img_new = time().$img->getClientOriginalName();
            $img->move('img/artikel', $img_new);

            $detail=$request->input('content');
            $dom = new \DomDocument();
            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
            foreach($images as $k => $img){
                $data = $img->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= "/img/gambar/" . time().$k.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
            $detail = $dom->saveHTML();

            $data = Artikel::create([
                'judul' => $request->judul,
                'akategori_id' => $request->akategori_id,
                'img' => 'img/artikel/' . $img_new,
                'content' => $detail,
                'slug' => Str::slug($request->judul),
            ]);
            Session::flash('success', 'Session tambah berhasil');
            return redirect()->route('artikel.index');
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
        $data = Artikel::find($id);
        return view('admin.artikel.edit', compact('data'))->with('akategori', Akategori::all());
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
        $data = Artikel::find($id);
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
                $img_new = time().$img->getClientOriginalName();
                $img->move('img/artikel', $img_new);
                $data->img = 'img/artikel/' . $img_new;
            }

            $detail=$request->input('content');
            $dom = new \DomDocument();
            @$dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
            $images = $dom->getElementsByTagName('img');
            foreach($images as $k => $imgg){
                $datas = $imgg->getAttribute('src');
                $ext = pathinfo($datas, PATHINFO_EXTENSION);
                if ($ext != "png") {
                    list($type, $datas) = explode(';', $datas);
                    list(, $datas)      = explode(',', $datas);
                    $datas = base64_decode($datas);
                    $image_name= "/img/gambar/" . time().$k.'.png';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $datas);
                    $imgg->removeAttribute('src');
                    $imgg->setAttribute('src', $image_name);
                }
            }
            $detail = $dom->saveHTML();

            $data->judul = $request->judul;
            $data->content = $detail;
            $data->akategori_id = $request->akategori_id;
            $data->slug = Str::slug($request->judul);
            $data->save();
            Session::flash('success', 'Session update berhasil');
            return redirect()->route('artikel.index');
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
        $data = Artikel::findOrfails($id);
        $data->delete();
        Session::flash('success', 'Session hapus berhasil');
       return redirect()->back();
    }
}
