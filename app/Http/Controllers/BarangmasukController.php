<?php

namespace App\Http\Controllers;

use App\Barangmasuk;
use App\Databarang;
use App\Datasupplier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\BarangmasukRequest;

use function GuzzleHttp\Promise\all;

class BarangmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $barangmasuks = Barangmasuk::with('Databarang','Datasupplier')->get();
        return view('barangmasuks.index',compact('barangmasuks'));

    }

    public function user(Request $request)
    {
        $barangmasuks = Barangmasuk::with('Databarang','Datasupplier')->get();
        return view('barangmasuks.user',compact('barangmasuks'));

    }


    public function print()
    {
        $barangmasuks = Barangmasuk::with('Databarang','Datasupplier')->get();

        return view('barangmasuks.print',compact('barangmasuks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $databarangs = Databarang::all();
        $datasuppliers = Datasupplier::all();
        return view('barangmasuks.create', compact('databarangs'),compact('datasuppliers')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangmasukRequest $request)
    {
        Barangmasuk::create([
            'jlh_brg_masuk' => $request->jlh_brg_masuk,
            'penerima' => $request->penerima,
            'tanggal' => $request->tanggal,
            'databarang_id' => $request->databarang_id,
            'datasupplier_id' => $request->datasupplier_id,
        ]);
        $barang = Databarang::find($request->databarang_id);
        $barang->stok += $request->jlh_brg_masuk;
        $barang->save();

        return redirect('barangmasuks')->with('success','Barang Masuk Berhasil Dibuat.');
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
        $barangmasuks = DB::table('barangmasuks')->where('id',$id)->get();
        return view('barangmasuks.edit',['barangmasuks' => $barangmasuks]);
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
        DB::table('barangmasuks')->where('id',$request->id)->update([
			'jlh_brg_masuk' => $request->jlh_brg_masuk,
			'penerima' => $request->penerima,
			'tanggal' => $request->tanggal,
			'databarang_id' => $request->databarang_id
		]);

        $barang = Databarang::find($request->databarang_id);
        $barang->stok += $request->jlh_brg_masuk;
        $barang->save();

        return redirect('barangmasuks')->with('success','Barang Masuk Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barangmasuks')->where('id',$id)->delete();
        return redirect('/barangmasuks');
    }
}
