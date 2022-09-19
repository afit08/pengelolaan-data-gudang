<?php

namespace App\Http\Controllers;

use App\Databarang;
use App\Barangmasuk;
use App\Barangkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FieldRequest;

class DatabarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $databarangs = Databarang::all();
            return view('databarangs.index',['databarangs' => $databarangs]);
    }

    // public function cari(Request $request)
    // {
    //     $search = $request->get('search');
    //     $databarangs = Databarang::all()->where('nama_barang','like','%'.$search.'%')->paginate(5);
    //     return view('databarangs.index',compact('databarangs'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }

    public function user(Request $request)
    {
        $databarangs = Databarang::all();
        return view('databarangs.user',['databarangs' => $databarangs]);
    }

    public function print()
    {
        $databarangs = Databarang::all();
        return view('databarangs.print',['databarangs' => $databarangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('databarangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FieldRequest $request)
    {
        // dd($request->all());
        Databarang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
        ]);

  
        // Databarang::create($request->all());

        return redirect('databarangs')->with('success','Data Barang Berhasil Dibuat.');
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
        $databarangs = Databarang::findorfail($id);
        return view('databarangs.edit', compact('databarangs'));
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
        $databarangs = Databarang::findorfail($id);
        $databarangs->update($request->all());
        return redirect('databarangs')->with('success','Data Barang Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $databarangs = Databarang::findorfail($id);
        $databarangs->delete();
        return back();
    }
}
