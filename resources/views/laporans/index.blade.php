@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Laporan</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-primary" href="{{ route('cetak-laporan') }}"> Print</a>
    </div>
</div> 
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<br>
<div class="table-responsive">
<table class="table align-middle mb-0 bg-white" id="dataTable">
  <thead class="bg-light">
    <tr>
    <th>No</th>
    <th>Tanggal Masuk</th>
    <th>Jumlah Barang Masuk</th>
    <th>Tanggal Keluar</th>
    <th>Jumlah Barang Keluar</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Stok Akhir</th>
    </tr>
  </thead>
  @foreach($laporans as $l => $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->tanggal}}</td>
        <td>{{$item->jlh_brg_masuk}}</td>
        <td>{{$item->tanggal_keluar}}</td>
        <td>{{$item->jlh_brg_keluar}}</td>
        <td>{{$item->Databarang->kode_barang}}</td>
        <td>{{$item->Databarang->nama_barang}}</td>
        <td>{{$item->Databarang->stok}}</td>
    </tr>
@endforeach

</table>
</div>
@endsection