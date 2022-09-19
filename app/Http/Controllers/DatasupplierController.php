<?php

namespace App\Http\Controllers;

use App\Datasupplier;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierRequest;

class DatasupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    
        $datasuppliers = Datasupplier::get();
        return view('datasuppliers.index',compact('datasuppliers'));
    }

    public function user(Request $request)
    {
        $datasuppliers = Datasupplier::get();
        return view('datasuppliers.user',compact('datasuppliers'));
    }

    public function print()
    {
        $datasuppliers = Datasupplier::get();
        return view('datasuppliers.print',compact('datasuppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasuppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierRequest $request)
    {
        Datasupplier::create([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_tlp' => $request->no_tlp
        ]);

        return redirect('datasuppliers')->with('success','Data Supplier Berhasil Dibuat.');
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
        $datasuppliers = Datasupplier::findorfail($id);
        return view('datasuppliers.edit', compact('datasuppliers'));
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
        $datasuppliers = Datasupplier::findorfail($id);
        $datasuppliers->update($request->all());
        return redirect('datasuppliers')->with('success','Data Supplier Berhasil Diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datasuppliers = Datasupplier::findorfail($id);
        $datasuppliers->delete();
        return back()->with('info','Data Supplier Berhasil Dihapus.');
    }
}
