@extends('template.layout')

@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
    <div class="pull-left">
        <h2>Edit Data Barang</h2>
    </div>
</div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('update-databarangs',$databarangs->id) }}" method="POST">
{{ csrf_field() }}
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Kode Barang</strong>
        <input type="text" name="kode_barang" value="{{ $databarangs->kode_barang }}" class="form-control" placeholder="Kode Barang">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Nama Barang</strong>
        <input type="text" name="nama_barang" value="{{ $databarangs->nama_barang }}" class="form-control" placeholder="Nama Barang">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Stok</strong>
        <input type="text" name="stok" value="{{ $databarangs->stok }}" class="form-control" placeholder="Stok Barang">
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection