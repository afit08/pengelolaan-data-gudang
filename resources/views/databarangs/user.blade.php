@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Data Barang</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-primary" target="_blank" href="{{ route('cetak-databarangs') }}"> Print</a>
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
      <th>Stok</th>
    </tr>
  </thead>
  <tbody>
  @foreach($databarangs as $databarang)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{ $databarang->kode_barang }}</td>
			<td>{{ $databarang->nama_barang }}</td>
			<td>{{ $databarang->stok }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection