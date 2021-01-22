<?php

namespace App\Http\Controllers;
use App\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $i = 1;
        return view('barang/barang-index', compact('barang','i'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create-barang');
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
        Barang::create($request->all());
        return redirect()->route('barang.index')
        ->with('success','Barang created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barangShow = Barang::where('id', $id)->get();
        return view('barang/show-barang', compact('barangShow'));
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
        $barangEdit = Barang::where('id',$id)->get();
        return view('barang/edit-barang', compact('barangEdit'));
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
        $barang = Barang::find($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis = $request->jenis;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->diskon = $request->diskon;
        $barang->tanggal_masuk = $request->tanggal_masuk;
        $barang->save();
        return redirect()->route('barang.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id',$id)->delete();
        return redirect()->route('barang.index');
        //
    }
}
