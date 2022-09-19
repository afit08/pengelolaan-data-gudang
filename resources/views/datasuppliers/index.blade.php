@extends('template/layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Data Supplier</h2>
    </div>
    <div class="pull-right" style="text-align: right;">
        <a class="btn btn-success" href="{{ route('create-datasupplier') }}"> Create</a>
        <a class="btn btn-primary" target="_blank" href="{{ route('cetak-datasuppliers') }}"> Print</a>
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
      <th>Kode Supplier</th>
      <th>Nama Supplier</th>
      <th>Alamat</th>
      <th>Email</th>
      <th>No Telepon</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($datasuppliers as $datasupplier)
    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$datasupplier->kode_supplier}} </td>
      <td>{{$datasupplier->nama_supplier}}</td>
      <td>{{$datasupplier->alamat}}</td>
      <td>{{$datasupplier->email}}</td>
      <td>{{$datasupplier->no_tlp}}</td>
      <td>
          <a href="{{ url('edit-datasuppliers',$datasupplier->id) }}">Edit</a> 
          | 
          <a href="{{ url('delete-datasuppliers',$datasupplier->id) }}">Hapus</a>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
</div>
@endsection