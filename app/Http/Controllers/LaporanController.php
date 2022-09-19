<?php

namespace App\Http\Controllers;

use App\Databarang;
use App\Barangmasuk;
use App\Barangkeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Barangmasuk::with('Databarang')
        ->leftJoin('barangkeluars', 'barangmasuks.id', '=', 'barangkeluars.id')
        ->orderBy('tanggal','asc')
        ->get();
        return view('laporans.index',['laporans' => $laporans]);
    }

    public function user(Request $request)
    {
        $laporans = Barangmasuk::with('Databarang')
        ->leftJoin('barangkeluars', 'barangmasuks.id', '=', 'barangkeluars.id')
        ->orderBy('tanggal','asc')
        ->get();
        return view('laporans.user',['laporans' => $laporans]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function cetakForm(){
        return view('laporans.print');
    }
 
    public function cetakFormTanggal($tglawal, $tglakhir){
        // dd('Tanggal Awal : '.$tglawal, "Tanggal Akhir : ".$tglakhir);
        $laporans = Barangmasuk::with('Databarang')
        ->leftJoin('barangkeluars', 'barangmasuks.id', '=', 'barangkeluars.id')
        ->orderBy('tanggal','asc')
        ->get()->whereBetween('tanggal',[$tglawal,$tglakhir]);
        return view('laporans.print-tanggal', ['laporans' => $laporans]);
    }
}
