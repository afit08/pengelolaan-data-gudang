@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Barang Keluar</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-primary" target="_blank" href="{{ route('cetak-barangkeluars') }}"> Print</a>
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
      <th>Kode Barang</th>
      <th>Nama Barang</th>
      <th>Jumlah Barang Keluar</th>
      <th>Tujuan</th>
      <th>Tanggal</th>
      <th>Operator</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($barangkeluars as $barangkeluar)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$barangkeluar->Databarang->kode_barang}}</td>
      <td>{{$barangkeluar->Databarang->nama_barang}}</td>
      <td>{{$barangkeluar->jlh_brg_keluar}}</td>
      <td>{{$barangkeluar->tujuan}}</td>
      <td>{{$barangkeluar->tanggal_keluar}}</td>
      <td>{{$barangkeluar->operator}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection