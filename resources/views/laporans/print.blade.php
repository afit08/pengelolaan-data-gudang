@extends('template/layout')

@section('content')
        <div class="mb-3">
            <label for="formFile" class="form-label">Kode Barang Awal</label>
            <input class="form-control" type="date" id="tglawal" name="tglawal">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Kode Barang Akhir</label>
            <input class="form-control" type="date" id="tglakhir" name="tglakhir">
        </div>

            <a href="" onclick="this.href='/laporan-tanggal/'+document.getElementById('tglawal').value+'/'+document.getElementById('tglakhir').value" target="_blank" class="btn btn-primary btn-block">Cetak</a>
@endsection 