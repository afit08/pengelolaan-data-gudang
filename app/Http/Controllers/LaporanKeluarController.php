<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barangkeluar;

class LaporanKeluarController extends Controller
{
    public function index()
    {
        $keluar = Barangkeluar::all();
        return view('laporans.index',['keluar' => $keluar]);
    }
}
