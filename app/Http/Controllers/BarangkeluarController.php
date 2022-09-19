<?php

namespace App\Http\Controllers;

use App\Barangkeluar;
use App\Databarang;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BarangkeluarRequest;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $barangkeluars = Barangkeluar::with('Databarang')->get();
        return view('barangkeluars.index',compact('barangkeluars'));
    }

    public function user(Request $request)
    {
        $barangkeluars = Barangkeluar::with('Databarang')->get();
        return view('barangkeluars.user',compact('barangkeluars'));
    }

    public function print()
    {
        $barangkeluars = Barangkeluar::with('Databarang')->get();

        return view('barangkeluars.print',compact('barangkeluars'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $databarangs = Databarang::all();
        return view('barangkeluars.create', compact('databarangs')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangkeluarRequest $request)
    {
        Barangkeluar::create([
            'jlh_brg_keluar' => $request->jlh_brg_keluar,
            'tujuan' => $request->tujuan,
            'tanggal_keluar' => $request->tanggal_keluar,
            'operator' => $request->operator,
            'databarang_id' => $request->databarang_id,
        ]);

        $barang = Databarang::find($request->databarang_id);

        $barang->stok -= $request->jlh_brg_keluar;
        $barang->save();

        return redirect('barangkeluars')->with('success','Barang Keluar Berhasil Dibuat.');
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
        $barangkeluars = DB::table('barangkeluars')->where('id',$id)->get();
        return view('barangkeluars.edit',['barangkeluars' => $barangkeluars]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('barangkeluars')->where('id',$request->id)->update([
			'jlh_brg_keluar' => $request->jlh_brg_keluar,
			'tujuan' => $request->tujuan,
			'tanggal_keluar' => $request->tanggal_keluar,
			'operator' => $request->operator,
			'databarang_id' => $request->databarang_id
		]);

        $barang = Databarang::find($request->databarang_id);
        $barang->stok -= $request->jlh_brg_keluar;
        $barang->save();
        return redirect('barangkeluars')->with('success','Barang Keluar Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barangkeluars')->where('id',$id)->delete();
        return redirect('/barangkeluars');
    }
}
