@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Barang Masuk</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-primary" target="_blank" href="{{ route('cetak-barangmasuks') }}"> Print</a>
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
      <th>Kode Supplier</th>
      <th>Nama Supplier</th>
      <th>Jumlah Barang Masuk</th>
      <th>Penerima</th>
      <th>Tanggal</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($barangmasuks as $barangmasuk)
    <tr>
      <td>{{$loop->iteration}}</td> 
      <td>{{$barangmasuk->Databarang->kode_barang}}</td>
      <td>{{$barangmasuk->Databarang->nama_barang}}</td>
      <td>{{$barangmasuk->Datasupplier->kode_supplier}}</td>
      <td>{{$barangmasuk->Datasupplier->nama_supplier}}</td>
      <td>{{$barangmasuk->jlh_brg_masuk}}</td>
      <td>{{$barangmasuk->penerima}}</td>
      <td>{{$barangmasuk->tanggal}}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection