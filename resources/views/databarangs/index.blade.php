@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Data Barang</h2>
    </div>
    
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-success" href="{{ route('create-databarang') }}">Create</a>
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
      <th>Action</th>
    </tr>
  </thead>
  @foreach($databarangs as $databarang => $item)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{ $item->kode_barang }}</td>
			<td>{{ $item->nama_barang }}</td>
			<td>{{ $item->stok}}</td>
      <td>
          <a href="{{ url('edit-databarangs',$item->id) }}">Edit</a> 
          | 
          <a href="{{ url('delete-databarangs',$item->id) }}">Hapus</a>
      </td>
    </tr>
  @endforeach
</table>
</div>
@endsection